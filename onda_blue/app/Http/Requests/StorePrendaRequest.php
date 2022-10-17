<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrendaRequest extends FormRequest
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
            "color" => 'required',
            "descripcion" => 'required',
            "tipo_tela" => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'color.required' => 'Campo Obligatorio',
            'descripcion.required' => 'Campo Obligatorio',
            'tipo_tela.required' => 'Campo Obligatorio'
            
        ];
    }
}
