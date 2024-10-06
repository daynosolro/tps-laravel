<?php

namespace App\Http\Requests;

use App\Http\Requests\CreateMessageRequest;
use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
{
    public function authorize()
    {
        return true; // You can implement authorization logic here if needed
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string'
        ];
    }


    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.alpha' => 'El nombre solo debe contener letras.',
            'email.email' => 'El formato del email no es válido.',
            'mensaje.required' => 'El mensaje es obligatorio.',
            'mensaje.min' => 'El mensaje debe tener al menos 10 caracteres.',
            'mensaje.max' => 'El mensaje no puede exceder los 200 caracteres.'
        ];
    }
}