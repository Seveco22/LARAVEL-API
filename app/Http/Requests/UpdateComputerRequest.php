<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComputerRequest extends FormRequest
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
            'computer_brand' => 'sometimes|required|string|max:255',
            'computer_model' => 'sometimes|required|string|max:255',
            'computer_price' => 'sometimes|required|numeric|min:0',
            'computer_ram_size' => 'sometimes|required|integer|min:1',
            'computer_is_laptop' => 'sometimes|required|boolean',
        ];
    }

    /**
     * Get custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'computer_brand.required' => 'The computer brand is required.',
            'computer_brand.string' => 'The computer brand must be a string.',
            'computer_brand.max' => 'The computer brand cannot exceed 255 characters.',
            
            'computer_model.required' => 'The computer model is required.',
            'computer_model.string' => 'The computer model must be a string.',
            'computer_model.max' => 'The computer model cannot exceed 255 characters.',
            
            'computer_price.required' => 'The computer price is required.',
            'computer_price.numeric' => 'The computer price must be a number.',
            'computer_price.min' => 'The computer price cannot be negative.',
            
            'computer_ram_size.required' => 'The RAM size is required.',
            'computer_ram_size.integer' => 'The RAM size must be an integer.',
            'computer_ram_size.min' => 'The RAM size must be at least 1 GB.',
            
            'computer_is_laptop.required' => 'Please specify if the computer is a laptop.',
            'computer_is_laptop.boolean' => 'The laptop field must be true or false.',
        ];
    }
}
