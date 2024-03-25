<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\ThankYouEmail;
use App\Models\AdditionalService;
use App\Models\Company;
use App\Models\CompanyAdditionalService;
use App\Models\CompanyBeneficialOwner;
use App\Models\CompanyBillingDetail;
use App\Models\CompanyShareholder;
use App\Models\Country;
use App\Models\Position;
use App\Models\ProcessingType;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Social;
use App\Models\State;
use App\Models\StateServiceAmount;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Stripe\Stripe;
use Stripe\Exception\CardException;
use Stripe\PaymentIntent;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request)
    {
        $country_code = $request->query('country');
        $state_name = $request->query('state');
        $service_name = $request->query('service');
        $type_name = $request->query('type');

        $countries = Country::where('active_jurisdiction', true)->orderBy('name', 'asc')->get();
        $countries_all = Country::orderBy('name', 'asc')->get();

        $country = null;
        if (!empty($country_code)) {
            foreach ($countries as $countryObj)
                if ($countryObj->code === $country_code) $country = $countryObj;
        }

        $states = null;
        if ($country && $country->show_states)
            $states = State::where('country_id', $country->id)->orderby('name', 'asc')->get();
            $state = null;
        if (!empty($states))
            foreach ($states as $stateObj)
                if ($stateObj->name == $state_name)
                    $state = $stateObj;
        $services = null;
        if ($country)
            $services = Service::where('country_id', $country->id)->orderby('name', 'asc')->get();

        $service = null;
        if (!empty($services))
            foreach ($services as $serviceObj)
                if ($serviceObj->name == $service_name)
                    $service = $serviceObj;

        $service_types = [];
        if ($service)
            $service_types = $service->types;

        $service_type = [];
        if (count($service_types))
            foreach ($service_types as $typeObj)
                if ($typeObj->id == $type_name)
                    $service_type = $typeObj;

        $processing_types = ProcessingType::all();
        $socials = Social::all();

        $state_amount = 0;
        if (!empty($service) && !empty($state)) {
            $state_service_amount = StateServiceAmount::where('state_id', $state->id)->where('service_id', $service->id)->first();
            $state_amount = !empty($state_service_amount) ? $state_service_amount->amount : 0;
        }
        $positions = Position::all();
        return view('welcome2', compact('countries',
            'states',
            'services',
            'service_types',
            'country',
            'state',
            'service',
            'service_type',
            'processing_types',
            'socials',
            'state_amount',
            'countries_all',
            'positions'
        ));
    }

    public function checkout(CheckoutRequest $request)
    {
        $total_payable_amount = 0;

        $country = Country::find($request->country_id);
        if (!$country)
            throw ValidationException::withMessages([
                'country_id' => ['The selected country does not exists.'],
            ]);

//        $social = Social::find($request->social_id);
//        if (!$social)
//            throw ValidationException::withMessages([
//                'social_id' => ['The selected social does not exists.'],
//            ]);

        $processing_type = ProcessingType::find($request->processing_type);
        if (!$processing_type)
            throw ValidationException::withMessages([
                'processing_type' => ['The selected processing type does not exists.'],
            ]);
        $total_payable_amount += $processing_type->amount;

        $service = Service::where('country_id', $request->country_id)->where('id', $request->service_id)->first();
        if (!$service)
            throw ValidationException::withMessages([
                'service_id' => ['The selected service does not belong to the specified country.'],
            ]);

        $service_type = null;
        if (!empty($request->service_type_id)) {
            $service_type = ServiceType::where('service_id', $service->id)->where('id', $request->service_type_id)->first();
            if (!$service_type)
                throw ValidationException::withMessages([
                    'service_type_id' => ['The selected corporation type does not belong to the specified service.'],
                ]);
        }

        $state = null;
        $state_service_amount = null;
        if ($country->show_states) {
            $state = State::where('country_id', $request->country_id)->where('id', $request->state_id)->first();
            if (!$state)
                throw ValidationException::withMessages([
                    'state_id' => ['The selected state does not belong to the specified country.'],
                ]);

            $state_service_amount = StateServiceAmount::where('state_id', $state->id)->where('service_id', $service->id)->first();
            if ($state_service_amount)
                $total_payable_amount += $state_service_amount->amount;
        }

        if (!empty($request->additional_services)) {
            $additional_service_ids = explode(",", $request->additional_services);
            foreach ($additional_service_ids as $additional_service_id) {
                $additional_service = AdditionalService::where('country_id', $country->id)->where('id', $additional_service_id)->first();
                if (!$additional_service)
                    throw ValidationException::withMessages([
                        'service_id' => ['The selected extra service does not belong to the specified country.'],
                    ]);
                $total_payable_amount += $additional_service->amount;
            }
        }

//        return $state_service_amount;

        if ($request->payment_method === 'bank') {
            $user = $this->createUserAccount($request);
            $company = $this->createCompany($request, $user, $service, $service_type, $processing_type, $state, $country, $state_service_amount, $total_payable_amount, null, null);

            if (!empty($request->additional_services))
                $this->addCompanyAdditionalServices($request, $company->id);

            $this->addCompanyShareholders($request, $company->id);
            $this->addCompanyBeneficialOwners($request, $company->id);
            $this->addCompanyBillingDetails($request, $company->id);

            $this->sendThankYouEmail($user, $country, $service, $total_payable_amount);
            return response()->json(['message' => 'Congratulations! your order has been placed!']);

        } elseif ($request->payment_method === 'online') {

            $stripeRequest['payment_method'] = $request->stripe_payment_id;
            $stripeRequest['totalAmount'] = $total_payable_amount;

            $stripePaymentResult = $this->handleStripePayment((object)$stripeRequest);

            if ($stripePaymentResult['success']) {


                $user = $this->createUserAccount($request);
                $company = $this->createCompany($request, $user, $service, $service_type, $processing_type, $state, $country, $social, $state_service_amount, $total_payable_amount, $stripePaymentResult['pay_id'], $stripePaymentResult['pay_slip']);

                if (!empty($request->additional_services))
                    $this->addCompanyAdditionalServices($request, $company->id);

                $this->addCompanyShareholders($request, $company->id);
                $this->addCompanyBeneficialOwners($request, $company->id);
                $this->addCompanyBillingDetails($request, $company->id);

                $this->sendThankYouEmail($user, $country, $service, $total_payable_amount);
                return response()->json(['message' => 'Congratulations! your order has been placed!']);

            } else {
                throw ValidationException::withMessages([
                    'processing_type' => [$stripePaymentResult['error']],
                ]);
            }

        }


        return $request;
    }

    private function sendThankYouEmail($user, $country, $service, $total_payable_amount) {
//        Mail::to($user->email)->send(new ThankYouEmail($country->name, $service->name, $total_payable_amount));
//        return response()->json(['message' => 'Congratulations! your order has been placed!']);
    }

    private function createUserAccount($request)
    {
        $user = User::where('email', $request->billing_email)->first();
        if (!$user) {
            // User does not exist, create a new user
            $password = Str::random(10); // Generate a random password
            $user = User::create([
                'name' => 'Example User', // Set a default name if needed
                'email' => $request->billing_email,
                'password' => bcrypt($password), // Hash the password
            ]);

            // Send an email with the user's email and password
//            Mail::raw("Your email: $request->billing_email\nYour password: $password", function ($message) use ($request) {
//                $message->to($request->billing_email)->subject('Bizvee Account Details');
//            });
        }
        return $user;
    }

    private function createCompany($request, $user, $service, $service_type, $processing_type, $state, $country, $state_service_amount, $total_amount, $stripe_pay_id, $stripe_pay_receipt)
    {
        $data = [
            'user_id' => $user->id,
            'country_id' => $country->id,
            'service_id' => $service->id,
            'service_type_id' => !empty($service_type) ? $service_type->id : null,
            'state_id' => !empty($state) ? $state->id : null,
            'processing_type_id' => $processing_type->id,
//            'social_id' => $social->id,
            'company_name_1' => $request->proposalName1,
            'company_name_2' => !empty($request->proposalName2) ? $request->proposalName2 : null,
            'company_name_3' => !empty($request->proposalName3) ? $request->proposalName3 : null,
            'service_name' => $service->name,
            'service_amount' => 0, //$service->amount,
            'service_type_name' => !empty($service_type) ? $service_type->name : null,
            'processing_type_name' => $processing_type->name,
            'processing_type_amount' => $processing_type->amount,
            'state_service_amount' => !empty($state_service_amount) ? $state_service_amount->amount : null,
            'payment_method' => $request->payment_method,
            'total_amount' => $total_amount,
            'transaction_id' => !empty($request->transaction_id) ? $request->transaction_id : null,
            'stripe_pay_id' => $stripe_pay_id,
            'stripe_pay_receipt' => $stripe_pay_receipt,
            'status' => 'pending',
            'special_request' => !empty($request->special_request) ? $request->special_request : null,
        ];

        return Company::create($data);
    }

    private function addCompanyAdditionalServices($request, $company_id) {
        $additional_service_ids = explode(",", $request->additional_services);
        foreach ($additional_service_ids as $additional_service_id) {
            $additional_service = AdditionalService::find($additional_service_id);
            CompanyAdditionalService::create([
                'company_id' => $company_id,
                'additional_service_id' => $additional_service->id,
                'name' => $additional_service->name,
                'amount' => $additional_service->amount,
            ]);
        }
    }

    private function addCompanyShareholders($request, $company_id) {

        for ($x = 1; $x <= $request->number_of_shareholders; $x++) {
            $country = Country::where('name', $request->input("shareholder_nationality$x"))->first();
            CompanyShareholder::create([
                'company_id' => $company_id,
                'country_id' => $country->id,
                'name' => $request->input("shareholder_name$x"),
                'percentage' => $request->input("shareholder_percentage$x"),
                'position_id' => $request->input("shareholder_position$x")
            ]);
        }
    }
    private function addCompanyBeneficialOwners($request, $company_id) {

        for ($x = 1; $x <= $request->number_of_beneficial_owners; $x++) {
            $country = Country::where('name', $request->input("beneficial_nationality$x"))->first();
            CompanyBeneficialOwner::create([
                'company_id' => $company_id,
                'country_id' => $country->id,
                'name' => $request->input("beneficial_name$x"),
            ]);
        }
    }

    private function addCompanyBillingDetails($request, $company_id) {
        return CompanyBillingDetail::create([
            'company_id' => $company_id,
            'name' => $request->billing_name,
            'email' => $request->billing_email,
            'personal_number' => $request->billing_personal_number,
            'address1' => $request->billing_address1,
            'address2' => $request->billing_address2,
            'country' => $request->billing_country,
            'state' => $request->billing_state,
            'city' => $request->billing_city,
            'zipcode' => $request->billing_zipcode,
        ]);

    }

    private static function handleStripePayment($stripeRequest)
    {
        Stripe::setApiVersion('2020-08-27');
        Stripe::setApiKey(config('stripe.secret_key'));

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $stripeRequest->totalAmount * 100,
                'currency' => 'usd',
                'payment_method' => $stripeRequest->payment_method,
                'confirm' => true,
            ]);
        } catch (CardException $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }

        if ($paymentIntent->status === 'succeeded') {
            return [
                'success' => true,
                'pay_id' => $paymentIntent->id,
                'pay_slip' => $paymentIntent->charges->data[0]->receipt_url
            ];
        } else {
            return ['success' => false, 'error' => 'Payment failed. Please try again later.'];
        }
    }
}
