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
            'loginUsername' => [
                'required',
                'min:3',
                'max:25',
                Rule::exists('users', 'username'),
            ],
            'loginPassword' => 'required|min:8|max:64',
        ];
    }

    /**
     * Get custom error messages for validation rules.
    */
    public function messages(): array
    {
        return [
            'loginUsername.required' => 'Incorrect username or password.',
            'loginUsername.exists' => 'Incorrect username or password.',
            'loginPassword.required' => 'Incorrect username or password',
            'loginPassword.min' => 'Incorrect username or password',
            'loginPassword.max' => 'Incorrect username or password',
        ];
    }
}
