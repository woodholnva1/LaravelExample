<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
class BuscarTuristaRequest extends FormRequest
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
            "identificacion" => ["required", 'integer'],
        ];
    }

    public function messages()
    {
        return [
            //
            "identificacion" => "La identificacion es requerida para la Busqueda",
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
