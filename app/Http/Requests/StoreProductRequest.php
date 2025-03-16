<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a number.',
        ];
    }
}
