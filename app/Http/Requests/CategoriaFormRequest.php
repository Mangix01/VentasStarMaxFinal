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
        switch ($this->method()) {
            case 'POST':
                $rules = [
                    'categoria' => [
                        'required',
                        'regex:/^[\pL\s\d]+$/u', // Esta regex permite letras (incluyendo ñ y tildes), espacios y números
                        'min:5',
                        'max:50',
                        'unique:categorias,categoria'
                    ],
                    'descripcion' => 'nullable|min:10|max:255',
                ];
                break;
            case 'PATCH':
                $rules = [
                    'categoria' => [
                        'required',
                        'regex:/^[\pL\s\d]+$/u',
                        'min:5',
                        'max:50',
                        'unique:categorias,categoria,' . $this->route('categoria')
                    ],
                    'descripcion' => 'nullable|min:10|max:255',
                ];
                break;
            default:
                $rules = [];
        }
        return $rules;
    }
}
