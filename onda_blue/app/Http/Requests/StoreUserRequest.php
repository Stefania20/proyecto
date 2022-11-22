<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            "name" => 'required',
            "email" => 'required|email|unique:users',
            "password" => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo Obligatorio',
            'email.required' => 'Campo Obligatorio',
            'email.unique' => 'Este correo ya existe',
            'password.required' => 'Campo Obligatorio',
            
        ];
    }
}
