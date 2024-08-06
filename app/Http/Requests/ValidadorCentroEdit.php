<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorCentroEdit extends FormRequest
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
            'txtCentro' => 'required|max:50',
            'txtUbicacion' => 'required|max:50',
            'txtURL' => 'required',
            'boxMaterials' => 'required|array|min:1',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'txtCentro.required' => 'El nombre del centro es obligatorio.',
            'txtUbicacion.required' => 'La ubicación es obligatoria.',
            'txtURL.required' => 'La URL es obligatoria.',
            'boxMaterials.required' => 'Debe seleccionar al menos un material.',
            'boxMaterials.min' => 'Debe seleccionar al menos un material.',
            'imagen.required' => 'La imagen es obligatoria.',
        ];
    }
}
