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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nombre" => 'required',
            "apellido" => 'required',
            "correo" => 'required',
            "password" => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Campo Obligatorio',
            'apellido.required' => 'Campo Obligatorio',
            'correo.required' => 'Campo Obligatorio',
            'password.required' => 'Campo Obligatorio',
            
        ];
    }
}
