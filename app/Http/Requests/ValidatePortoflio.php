<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ValidatePortoflio extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
        //return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'title' => 'required|max:100',
            'description' => 'required',
            'image' => 'mimes:jpg,png'
        ];
    }

    public function messages()
    {
        
        return [
            'name.required' => 'You must insert portofolio name',
            'title.required' => 'You must insert portofolio title',
            'name.max' => 'Max value is 100 character',
            'title.max' => 'Max value is 100 character',
            'description.required' => 'You must insert portofolio description',
            'image.mimes'   => 'Image format is jpg or png'
        ];
    }
}
