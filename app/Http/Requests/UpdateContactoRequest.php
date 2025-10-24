<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'empresa_id' => ['sometimes', 'integer', 'exists:empresa,id'],
            'nombre'     => ['sometimes', 'string', 'max:200'],
            'celular'    => ['nullable', 'string', 'max:9'],
            'direccion'  => ['nullable', 'string', 'max:250'],
            'correo'     => ['nullable', 'string', 'email', 'max:150'],
        ];
    }
}
