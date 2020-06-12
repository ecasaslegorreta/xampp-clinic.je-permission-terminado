<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        return [
            
            'name' => 'required|unique:permissions|max:255',
            'description' => 'required',
            'role_id' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es Requerido',
            'name.unique' => 'El Nombre ya está Ocupado',
            'description.required' => 'La Descripción es requerida',
            'role_id.required' => 'El Campo de Role es requerido',
            'role_id.numeric' => 'El formato no es correcto',
        ];
    }
}
