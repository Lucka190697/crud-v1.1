<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    public function rules()
    {        
        return  [
            'name' => 'required|string|max:255',
            'email' => 'string|unique:users,email',
            'password' => 'required|bail|min:6',
            'confirm_password' => 'required|bail|min:6|same:password'
        ];
    }
}
