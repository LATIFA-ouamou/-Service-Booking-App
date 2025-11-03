<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
{
    /**
     * Autoriser la requête.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Règles de validation pour la mise à jour.
     */
    public function rules(): array
    {
        return [
            'service_id' => 'sometimes|exists:services,id',
            'date' => 'sometimes|date',
            'time' => 'sometimes',
            'status' => 'nullable|string|in:pending,confirmed,cancelled',
        ];
    }

    /**
     * Messages personnalisés.
     */
    public function messages(): array
    {
        return [
            'service_id.exists' => 'Le service sélectionné n’existe pas.',
            
            'date.date' => 'La date doit être une date valide.',
            'date.after_or_equal' => 'La date ne peut pas être antérieure à aujourd’hui.',

            'status.in' => 'Le statut doit être soit pending, confirmed ou cancelled.',
        ];
    }
}
