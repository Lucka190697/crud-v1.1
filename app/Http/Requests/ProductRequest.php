<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
   public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'string|max:255',
            'image' => 'file',
            'thumbnail' => 'file',
            'price' => 'required|string',
        ];
    }
}
