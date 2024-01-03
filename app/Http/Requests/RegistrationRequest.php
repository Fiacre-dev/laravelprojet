<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegistrationRequest extends FormRequest
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
            "nom" => "required|min:3|string",
            "email" => "required|unique:users,email|email",
            "password" => ["required", "string", "confirmed", Password::default()]
        ];
    }

    public function messages()
    {
        return [
            "nom.required" => "Le nom est obligatoire",
            "nom.min" => "Veuillez entrer une longueur min de 3",
            "password.min" => "Le mot de passe doit avoir au moins 8 caractères"
        ];
    }
}
