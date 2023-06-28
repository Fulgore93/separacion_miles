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
            'numero_string1'    => 'nullable|numeric|decimal:0,2|between:1,999999999',
            'numero_string2'    => 'nullable|numeric|decimal:0,2|between:1,999999999',
            'numero_float1'     => 'nullable|numeric|decimal:0,2|between:1,999999999',
            'numero_float2'     => 'nullable|numeric|decimal:0,2|between:1,999999999',
            'numero_int1'       => 'nullable|numeric|between:1,999999999',
            'numero_int2'       => 'nullable|numeric|between:1,999999999',
            'numero_double1'    => 'nullable|numeric|decimal:0,2|between:1,999999999',
            'numero_double2'    => 'nullable|numeric|decimal:0,2|between:1,999999999',
        ];
    }
}
