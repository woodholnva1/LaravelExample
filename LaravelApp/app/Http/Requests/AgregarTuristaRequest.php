<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;

class AgregarTuristaRequest extends FormRequest
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
            //
            "nombre" => ['required', 'string'],
            "apellido" => ["required", 'string'],
            "identificacion" => ["required", 'integer'],
            "telefono" => ['nullable','string'],
            "viaje_id" => ["required", 'exists:viajes,id'],
        ];
    }

    public function messages()
    {
        return [
            //
            "nombre" => "El Nombre del Producto es Requerido",
            "apellido" => "El Apellido es Requerido",
            "identificacion" => "La identificacion es Requerido",
            "viaje_id.required" => "El viajes es requerido",
            "viaje_id.exists" => "El viaje no Existe",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'message' => 'Ocurrio un Error en la Validacion',
            'errors' => $validator->errors()
        ]);

        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag);
    }
}
