<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'category_id' => ['required', 'integer'],
            'description' => ['nullable', 'string'],
        ];
    }
}
