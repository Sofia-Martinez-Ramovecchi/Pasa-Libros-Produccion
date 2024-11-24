<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_estado_publicacion' => 'required|exists:estado_publicacion,id',
            'id_libro' => 'required|exists:libro,id',
            'id_localidad' => 'required|exists:localidad,id',
            'fecha_creacion' => 'required|date',
            'descripcion_publicacion' => 'nullable|string|max:200',
            //
        ];
    }
}
