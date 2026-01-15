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
}
