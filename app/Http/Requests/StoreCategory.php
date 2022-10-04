<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCategory extends FormRequest
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
            'blog_category' => 'required|max:25'
        ];
    }

    public function messages()
    {
        return [
            'blog_category.required' => "Category Name is Required!",
            'blog_category.max' => "Max Length is 25 chars!"
        ];
    }
}
