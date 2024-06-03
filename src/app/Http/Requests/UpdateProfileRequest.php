<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'lotBlk' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:5|min:4|regex:/^\d{4,5}$/',
            'contact' => ['nullable', 'string', 'max:11', 'regex:/^09?\d{9}$/'],
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'zip_code.regex' => 'The ZIP code must be a valid 4 or 5-digit number.',
            'zip_code.max' => 'The ZIP code may not be greater than 5 characters.',
            'zip_code.min' => 'The ZIP code must be at least 4 characters.',
            
            'contact.regex' => 'The contact number must be a valid Philippine mobile number.',
        ];
    }
}
