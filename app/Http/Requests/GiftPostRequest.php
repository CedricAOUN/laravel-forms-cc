<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiftPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // No user management implemented, so always return true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50|min:3',
            'price' => 'required|decimal:0,2|min:0',
            'details' => 'nullable|string',
            'url' => 'nullable|string|url:http,https',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required.',
            'name.min' => 'Mininum of 3 characters needed for the name.',
            'name.max' => 'Maximum of 50 characters allowed for the name.',
            'price.required' => 'Price is required.',
            'price.decimal' => 'The price cannot exceed 2 decimal places. (e.g., 19.99)',
            'price.min' => 'The price must be greater than or equal to 0.',
            'url.url' => 'Please enter a valid URL (must start with http or https).',
        ];
    }
}
