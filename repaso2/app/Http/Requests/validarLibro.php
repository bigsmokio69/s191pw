<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarLibro extends FormRequest
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
        return [
            'isbn'=> 'required | numeric | digits:13',
            'titulo'=> 'required | min:2 | max:150',
            'autor'=> 'required |  min:2 | max:50',
            'pags'=> 'required | numeric | min:1',
            'year'=> 'required | numeric | digits_between:1,4 | max:2024',
            'editorial'=> 'required | min:1 | max:150 | alpha',
            'mailEdit'=> 'required | email:rfc,dns',

        ];
    }
}
