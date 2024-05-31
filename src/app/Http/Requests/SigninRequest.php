<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'username' => [
                'required',
                'min:3',
                'max:25',
                Rule::exists('users', 'username'),
            ],
            'password' => 'required|min:8|max:64',
        ];
    }

    /**
     * Get custom error messages for validation rules.
    */
    public function messages(): array
    {
        return [
            'username.required' => 'Please provide a username.',
            'username.exists' => 'Incorrect Username.',
            'password.required' => 'Please provide a password.',
        ];
    }
}
