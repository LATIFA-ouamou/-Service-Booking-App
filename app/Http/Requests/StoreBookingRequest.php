<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Autoriser la requête.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Règles de validation.
     */
    public function rules(): array
    {
        return [
            'service_id' => 'required|exists:services,id',
            'date' => 'required|date',
            'time' => 'required',
            'status' => 'nullable|string|in:pending,confirmed,cancelled',
        ];
    }

    /**
     * Messages personnalisés.
     */
    public function messages(): array
    {
        return [
            'service_id.required' => 'Le service est obligatoire.',
            'service_id.exists' => 'Le service sélectionné n’existe pas.',
            
            'date.required' => 'La date de réservation est obligatoire.',
            'date.date' => 'La date doit être une date valide.',
            'date.after_or_equal' => 'La date ne peut pas être antérieure à aujourd’hui.',

            'time.required' => 'L’heure de réservation est obligatoire.',

            'status.in' => 'Le statut doit être soit pending, confirmed ou cancelled.',
        ];
    }
}
