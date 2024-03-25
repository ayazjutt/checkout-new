<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'country_id' => 'required|numeric|exists:countries,id',
            'state_id' => 'nullable|numeric|exists:states,id',
            'service_id' => 'required|numeric|exists:services,id',
            'service_type_id' => 'nullable|numeric|exists:service_types,id',
//            'social_id' => 'required|numeric|exists:socials,id',
            'processing_type' => 'required|numeric|exists:processing_types,id',

            'proposalName1' => 'required|string',
            'proposalName2' => 'string|nullable',
            'proposalName3' => 'string|nullable',

            'number_of_shareholders' => 'required|numeric|min:1',
//            'number_of_beneficial_owners' => 'required|numeric|min:1',

            'billing_name' => 'required|string',
            'billing_email' => 'required|email',
            'billing_personal_number' => 'required|string',
            'billing_address1' => 'required|string',
            'billing_address2' => 'string|nullable',
            'billing_country' => 'required|string',
            'billing_state' => 'required|string',
            'billing_city' => 'required|string',
            'billing_zipcode' => 'required|string',
            'special_request' => 'string|nullable',

            'payment_method' => 'required|string|in:bank,online', // Ensure payment_method is either 'bank' or 'stripe'
            'transaction_id' => 'nullable|required_if:payment_method,bank|string',
            'stripe_payment_id' => 'required_if:payment_method,online|string', // Required if payment_method is 'stripe'
        ];
    }
}
