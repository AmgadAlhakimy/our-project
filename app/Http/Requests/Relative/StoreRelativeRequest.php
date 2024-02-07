<?php

namespace App\Http\Requests\Relative;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'father_name' => [
                'required', 'max:50',
                'regex:/^[a-zA-Z\s]+$/',
            ],
            'father_name_ar' => [
                'required', 'max:50',
                'regex:/^[\p{Arabic}\s]+$/u',
            ],
            'father_work' => [
                'nullable', 'max:50',
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
            ],
            'father_work_ar' => [
                'nullable', 'max:50',
                'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
            ],
            'father_contact1' => [
                'required', 'numeric',
            ],
            'father_contact2' => [
                'nullable', 'numeric',
            ],
            'mother_name' => [
                'required', 'max:50',
                'regex:/^[a-zA-Z\s]+$/',
            ],
            'mother_name_ar' => [
                'required', 'max:50',
                'regex:/^[\p{Arabic}\s]+$/u',
            ],
            'mother_work' => [
                'nullable', 'max:50',
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
            ],
            'mother_work_ar' => [
                'nullable', 'max:50',
                'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
            ],
            'mother_contact1' => [
                'nullable', 'numeric',
            ],
            'mother_contact2' => [
                'nullable', 'numeric',
            ],
            'kin_name' => [
                'nullable', 'max:50',
                'regex:/^[a-zA-Z\s]+$/',
            ],
            'kin_name_ar' => [
                'nullable', 'max:50',
                'regex:/^[\p{Arabic}\s]+$/u',
            ],
            'kin_relationship' => [
                'nullable', 'max:50',
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
            ],
            'kin_relationship_ar' => [
                'nullable', 'max:50',
                'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
            ],
            'kin_contact' => [
                'nullable', 'numeric',
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
            'father_name.regex'=>__('validation.english letters'),
            'father_name_ar.regex'=>__('validation.arabic letters'),
            'mother_name.regex'=>__('validation.english letters'),
            'mother_name_ar.regex'=>__('validation.arabic letters'),
            'father_work.regex'=>__('validation.english letters'),
            'father_work_ar.regex'=>__('validation.arabic letters'),
            'mother_work.regex'=>__('validation.english letters'),
            'mother_work_ar.regex'=>__('validation.arabic letters'),
            'kin_name.regex'=>__('validation.english letters'),
            'kin_name_ar.regex'=>__('validation.arabic letters'),
            'kin_relationship.regex'=>__('validation.english letters'),
            'kin_relationship_ar.regex'=>__('validation.arabic letters'),
        ];
    }
}
