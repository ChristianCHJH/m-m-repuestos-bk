<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'empresa_id' => ['required', 'integer', 'exists:empresa,id'],
            'nombre'     => ['required', 'string', 'max:200'],
            'celular'    => ['nullable', 'string', 'max:9'],
            'direccion'  => ['nullable', 'string', 'max:250'],
            'correo'     => ['nullable', 'string', 'email', 'max:150'],
        ];
    }
}

