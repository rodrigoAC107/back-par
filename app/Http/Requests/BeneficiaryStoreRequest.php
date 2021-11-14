<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiaryStoreRequest extends FormRequest
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
            "location_id" => ['required'],
            "dni" => ['required'],
            "name" => ['required', 'max:50'],
            "lastname" => ['required', 'max:50'],
            "email" => ['required', 'email', 'unique:beneficiaries,email'],
            "address" => ['required'],
        ];
    }
}
