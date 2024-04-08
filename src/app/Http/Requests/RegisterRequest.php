<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:64', 'regex:/^[A-Za-z\s]+$/'],
            'last_name' => ['required', 'string', 'max:64', 'regex:/^[A-Za-z\s]+$/'],
            'birth_date' => ['required', 'date'],

            'address' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'regex:/^09[0-9]{9}$/'],

            'username' => ['required', 'string', 'min:3', 'max:25', 'regex:/^[a-zA-Z0-9]+$/i', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:64', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]+$/'],
            'password_confirmation' => ['required'],

            'city' => ['required', 'string', 'max:64'],
            'state_province' => ['required', 'string', 'max:64'],
            'postal_code' => ['required', 'string', 'max:64'],
            'country' => ['required', 'string', 'alpha', 'max:64'],
        ];
    }
}
