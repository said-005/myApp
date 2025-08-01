<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSablage_InterneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Allow request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('Sablage_int'); // Get ID from route

        return [
            'code_Sablage_Interne' => 'required|string|unique:sablage_internes,code_Sablage_Interne,' . $id . ',code_Sablage_Interne',
            'date_Sablage_Interne' => 'required|date',
            'ref_production'       => 'required|string',
            'code_Reparation'      => 'nullable|string',
            'machine'              => 'required|string',
            'statut'               => 'required|string',
            'defaut'               => 'nullable|string',
            'causse'               => 'nullable|string',
            'operateur'            => 'required|string',
            'soudeur'              => 'required|string',
            'controleur'           => 'required|string',
            'description'       =>'nullable|string',
        ];
    }
}
