<?php

namespace App\Http\Requests;

use App\Models\Usuario;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
/**
* Get the validation rules that apply to the request.
*
* @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
*/
public function rules(): array
{
return [
'nombre_usuario' => ['nullable', 'string', 'max:255'],
'email' => ['nullable', 'string', 'lowercase', 'email', 'max:255', Rule::unique(Usuario::class)->ignore($this->user()->id)],
'password' => ['nullable', 'string', 'min:6'],
'profile_photo' => ['nullable', 'image', 'max:2048'], // Máximo 2MB
'headerColor' => ['nullable', 'string', 'size:7'], // Ejemplo: #ff0000
];
}
}
