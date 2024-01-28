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
            'father_name'=>['required', 'unique:relatives', 'max:100'],
            'father_name_ar'=>['required', 'unique:relatives', 'max:100'],
            'father_work'=>['required', 'unique:relatives', 'max:100'],
            'father_work_ar'=>['required', 'unique:relatives', 'max:100'],
            'father_contact1'=>['required', 'unique:relatives', 'numeric'],
            'father_contact2'=>['required', 'unique:relatives', 'numeric'],
            'mother_name'=>['required', 'unique:relatives', 'max:100'],
            'mother_name_ar'=>['required', 'unique:relatives', 'max:100'],
            'mother_work'=>['required', 'unique:relatives', 'max:100'],
            'mother_work_ar'=>['required', 'unique:relatives', 'max:100'],
            'mother_contact1'=>['required', 'unique:relatives', 'numeric'],
            'mother_contact2'=>['required', 'unique:relatives', 'numeric'],
            'kin_name'=>['required', 'unique:relatives', 'max:100'],
            'kin_name_ar'=>['required', 'unique:relatives', 'max:100'],
            'kin_relationship'=>['required', 'unique:relatives', 'max:100'],
            'kin_relationship_ar'=>['required', 'unique:relatives', 'max:100'],
            'kin_contact'=>['required', 'unique:relatives', 'numeric'],
        ];
    }
}
