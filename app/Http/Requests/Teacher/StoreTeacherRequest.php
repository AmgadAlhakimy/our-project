<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'name'=>['required','max:50',
                'unique:teachers,name->en',
                'regex:/^[a-zA-Z\s]+$/',
            ],
            'name_ar'=>['required','max:50',
                'unique:teachers,name->ar',
                'regex:/^[\p{Arabic}\s]+$/u',

            ],
            'contact' => ['required', 'numeric'],
            'address' => [
                'required', 'max:100',
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
            ],
            'address_ar' => [
                'required', 'max:100',
                'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
            ],
            'qualification' => ['required', 'max:100'],
            'qualification_ar' => ['required', 'max:100'],
            'salary' => ['required', 'numeric'],
            'major' => ['required', 'max:100'],
            'major_ar' => ['required', 'max:100'],
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
        ];
    }
}
