<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBlog extends FormRequest
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
            'blog_title' => 'required',
            'blog_image' => 'required|mimes:jpg,png',
            'blog_description' => 'required',
            'blog_tags' => 'required',
            'blog_category_id' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'blog_title.required' => 'Insert Blog Title',
            'blog_image.required' => 'Insert Blog Image',
            'blog_image.mimes' => 'Image format not supported try jpg, png',
            'blog_tags.required' => 'Insert Blog Tags',
            'blog_category_id.required' => 'Choose Blog Category',
            'blog_category_id.numeric' => 'Choose from the menu above',
        ];

    }
}
