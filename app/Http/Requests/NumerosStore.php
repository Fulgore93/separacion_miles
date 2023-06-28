<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NumerosStore extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [           
            'numero_string1'    => 'required',
            'numero_string2'    => 'required',
            'numero_float1'     => 'required',
            'numero_float2'     => 'required',
            'numero_int1'       => 'required',
            'numero_int2'       => 'required',
            'numero_double1'    => 'required',
            'numero_double2'    => 'required',
        ];
    }
}
