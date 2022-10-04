<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|string',
            'email' => 'required|email',
            'subject' => 'string',
            'phone_number' => 'required|min:11|numeric',
            'message' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Please write your name',
            'username.string' => 'Your name is not valid',
            'email.required' => 'Please write your email',
            'email.email' => 'Your email is not valid',
            'subject.string' => 'Please write your subject message',
            'phone_number.required' => 'Write Your phone number',
            'phone_number.min' => 'Min Value for phone is 11 number',
            'phone_number.numeric' => 'Your phone is not valid',
            'message.required' => 'Please write your message',
            'message.string' => 'Your message must be text only',
        ];
    }

}
