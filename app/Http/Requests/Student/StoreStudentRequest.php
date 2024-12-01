<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'name' => [
                'required', 'max:100',
                'regex:/^[a-zA-Z\s]+$/',
            ],
            'name_ar' => [
                'required', 'max:100',
                'regex:/^[\p{Arabic}\s]+$/u',

            ],
            'photo' => 'required', 'image', 'max:1024',
            'mimes:jpg,png,jpeg,gif,svg,ico',
            'address' => [
                'required', 'max:100',
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
            ],
            'address_ar' => [
                'required', 'max:100',
                'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
            ],
            'birthdate' => 'required',
            'place_of_birth' => 'required',
            'place_of_birth_ar' => 'required',
            'classroom_id' => 'required',
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
            'name.regex' => __('validation.english letters'),
            'name_ar.regex' => __('validation.arabic letters'),
            'address.regex' => __('validation.english letters'),
            'address_ar.regex' => __('validation.arabic letters'),
            'class.required' => __('CreateStudent.first you have to add classrooms'),
        ];
    }


}
