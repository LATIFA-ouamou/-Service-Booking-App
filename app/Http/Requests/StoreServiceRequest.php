<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'price' => 'required|min:1',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            'duration' => 'nullable|integer|min:1',



        ];
    }


      public function messages(): array
    {
        return [
            'title.required' => 'Le titre est obligatoire.',
            'price.min' => 'doit être supérieur à 0.',
            'image.image' => 'Le fichier doit être une image',
        ];
    }
}
