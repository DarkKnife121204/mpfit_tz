<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'full_name' => ['required', 'string'],
            'product_id' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'comment' => ['nullable', 'string'],
        ];
    }
}
