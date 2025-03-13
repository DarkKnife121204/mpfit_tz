<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
            'description' => ['nullable', 'string'],
        ];
    }
}
