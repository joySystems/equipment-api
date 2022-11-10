<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class EquipmentStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //

            'equipments' => "present|array",
            'equipments.*.equipment_type_id' => "required|string", 
            'equipments.*.serial_number' => "required|string", 
            'equipments.*.comments' => "sometimes|nullable|string"
        ];
    }

    public function failedValidation(Validator $validator)

    {

        throw new HttpResponseException(response()->json([

            'success'   => false,

            'message'   => 'Validation errors',

            'data'      => $validator->errors()

        ]));

    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages()
    {
        return [
         'equipments.*.equipment_type_id.required' => 'Поле тип оборудования обязательное',
         'equipments.*.serial_number.required' => 'Поле серийный номер обязательное',
                ];
    }
    
}
