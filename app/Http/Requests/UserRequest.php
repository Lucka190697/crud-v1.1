<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {        
        $rules = [
            'profile' => 'file|nullable',
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|bail|min:6',
            'confirm_password' => 'required|bail|min:6|same:password',
            'cep' => 'required|string|min:6',
            'district' => 'required|string|max:255',
            'number' => 'numeric|nullable',
            'complement' => 'string|nullable',
            'city'=> 'required|string|max:255',
            'state' => 'required|string|max:255',
        ];

        if(!!$this->user && in_array($this->method(),['PUT', 'PATCH'])) {
            $rules['email'] .= ",{$this->user}";

            $hasPassword = isset($this->user['password']) && $this->user['password'] !== null;
            $rules['password'] = ($hasPassword)
                ?rules['password']
                : 'sometimes|confirmed';
         }

        return $rules;
    }
}
