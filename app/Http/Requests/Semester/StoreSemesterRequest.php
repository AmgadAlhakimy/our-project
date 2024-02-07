<?php

namespace App\Http\Requests\Semester;

use Illuminate\Foundation\Http\FormRequest;

class StoreSemesterRequest extends FormRequest
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
            'name'=>[
                'required',
                'unique:semesters,name->en',
                'max:100',
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
            ],
            'name_ar'=>[
                'required',
                'unique:semesters,name->ar',
                'max:100',
                'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.regex'=>__('validation.english letters'),
            'name_ar.regex'=>__('validation.arabic letters'),
        ];
    }

}
