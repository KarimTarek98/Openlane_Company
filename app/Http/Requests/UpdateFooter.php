<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateFooter extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'phone_number' => 'required',
            'contact_text' => 'required',
            'country' => 'required|max:50',
            'address_details' => 'required|max:100',
            'company_email' => 'required|max:50',
            'connect_small_desc' => 'required|max:100',
            'copyright' => 'required|max:100',
        ];
    }

    public function messages()
    {
        return [
            'phone_number.required' => 'Add Phone Number',
            'contact_text.required' => 'Add Contact Text',
            'country.required' => 'Add Country Name',
            'country.max' => 'Country Name can\'t be more than 50 letter',
            'address_details.required' => 'Add Address',
            'address_details.max' => 'Address can\'t be more than 100 letter',
            'company_email.required' => 'Add Company Email',
            'company_email.max' => 'Company Email can\'t be more than 50 letter',
            'connect_small_desc.required' => 'Add Connect Description',
            'connect_small_desc.max' => 'Connect Description can\'t be more than 100 letter',
            'copyright.required' => 'Add Copyright',
            'copyright.max' => 'Copyright can\'t be more than 100 letter',
        ];
    }
}
