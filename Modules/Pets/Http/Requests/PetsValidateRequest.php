<?php

namespace Modules\Pets\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * En: Validation rules that apply to the application.
 * Es: Reglas de validación que se aplican a la solicitud.
 *
 * @class   PetsValidateRequest
 * @package Modules\Pets\Http\Requests
 */
class PetsValidateRequest extends FormRequest
{
    /**
     * En: Get the validation rules that apply to the request.
     * Es: Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'      =>  ['required','string','min:1','max:255'],
            'age'       =>  ['required','string','min:1','max:255'],
            'client_id' =>  ['required','string','min:1','max:255'],
            'status'    =>  ['required', 'boolean'],
        ];
    }

    /**
     * En: Determine if the user is authorized to make this request.
     * Es: Determine si el usuario está autorizado a realizar esta solicitud.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
