<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        switch ($this->method()){
            case 'POST': //Nuevo
                $rules = [
                    'categoria' => 'required|regex:/^[a-zA-Z0-9 ]+$/|min:5|max:50|unique:categorias,categoria', //solo letras numeros y espacios
                    'descripcion' => 'nullable|min:10|max:255', // Descripción no obligatoria, pero con mínimo y máximo
                ];
                break;
            case 'PATCH': //Edicion
                $rules = [
                    'categoria' => 'required|regex:/^[a-zA-Z0-9 ]+$/|min:5|max:50|unique:categorias,categoria,' . $this->route('categoria'), //solo letras numeros y espacios
                    'descripcion' => 'nullable|min:10|max:255', // Descripción no obligatoria, pero con mínimo y máximo
                ];
                break;
            case 'DELETE';
            default;
        }
        return $rules;
    }
}
