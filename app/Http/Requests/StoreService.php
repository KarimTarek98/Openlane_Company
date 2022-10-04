<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreService extends FormRequest
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
            'service_title' => 'required',
            'service_description' => 'required',
            'service_img' => 'required|mimes:jpg,png',
            'service_list' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'service_title.required' => 'Enter Service Title',
            'service_description.required' => 'Enter Service Description',
            'service_img.required' => 'Insert Service Image',
            'service_img.mimes' => 'Service Image must be jpg or png',
            'service_list.required' => 'Enter Service List', 
        ];
    }

}
