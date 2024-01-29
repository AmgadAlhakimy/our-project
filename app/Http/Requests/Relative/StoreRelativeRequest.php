<?php

namespace App\Http\Requests\Relative;

use Illuminate\Foundation\Http\FormRequest;

class StoreRelativeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'father_name'=>['required',  'max:100'],
            'father_name_ar'=>['required',  'max:100'],
            'father_work'=>['required',  'max:100'],
            'father_work_ar'=>['required',  'max:100'],
            'father_contact1'=>['required', 'numeric'],
            'father_contact2'=>['required', 'numeric'],
            'mother_name'=>['required', 'max:100'],
            'mother_name_ar'=>['required',  'max:100'],
            'mother_work'=>['required',  'max:100'],
            'mother_work_ar'=>['required',  'max:100'],
            'mother_contact1'=>['required',  'numeric'],
            'mother_contact2'=>['required',  'numeric'],
            'kin_name'=>['required',  'max:100'],
            'kin_name_ar'=>['required',  'max:100'],
            'kin_relationship'=>['required',  'max:100'],
            'kin_relationship_ar'=>['required',  'max:100'],
            'kin_contact'=>['required',  'numeric'],
        ];
    }
}
