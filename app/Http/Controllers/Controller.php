<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\ProcessingType;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Social;
use App\Models\State;
use App\Models\StateServiceAmount;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

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

        $service_types = null;
        if ($service)
            $service_types = $service->types;

        $service_type = null;
        if (!empty($service_types))
            foreach ($service_types as $typeObj)
                if ($typeObj->name == $type_name)
                    $service_type = $typeObj;

        $processing_types = ProcessingType::all();
        $socials = Social::all();

        $state_amount = 0;
        if (!empty($service) && !empty($state)) {
            $state_service_amount = StateServiceAmount::where('state_id', $state->id)->where('service_id', $service->id)->first();
            $state_amount = !empty($state_service_amount) ? $state_service_amount->amount : 0;
        }

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
            'countries_all'
        ));
    }

    public function checkout(Request $request)
    {
        return $request;
    }
}
