<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
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
            'tituloLibro' => 'required|max:255',
            'autor' => 'required|max:255',
            'editorialLibro' => 'required|max:100',
            'versionLibro' => 'required|in:new,used',
            'codigoInternacional' => 'required|int',
            'descripcionLibro' => 'required',
            'photo' => ['required', 'image', 'max:2048'],
            'photoC' => ['nullable', 'image', 'max:2048'],
            //
        ];
    }
}
