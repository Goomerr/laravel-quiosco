<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RegistroRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => [
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->symbols()->numbers()
            ]
        ];
    }

    public function messages()
    {
        return [
            'name' => 'El nombre es obligatorio',
            'email.required' => 'El Email es obligatorio',
            'email.email' => 'Introduce un Email valido',
            'email.unique' => 'El email ya esta registrado',
            'password.required' => 'El password es obligatorio',
            'password.confirmed' => 'Los password no son iguales. ',
            'password' => ' El Password debe contener al menos 8 caracteres, un número y un símbolo',

        ];
    }
}