<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserPostRequest extends FormRequest
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
            'editedContent' => 'required|string|max:255', // Renamed from 'editedContent'
            'image' => 'nullable|mimes:jpeg,png,jpg|max:2048', // Renamed from 'editedImage'
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'editedContent.required' => 'The content field is required.',
            'editedContent.max' => 'The content field must not exceed 255 characters.',
            
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max' => 'The image may not be greater than 2048 kb.',
        ];
    }
}
