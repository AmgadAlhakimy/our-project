<?php

namespace App\Http\Requests\Classroom;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreClassroomRequest extends FormRequest
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
                'required',
                'unique:classrooms,name->en',
                'max:100',
                'regex:/^[a-zA-Z\s]+$/',
            ],
            'name_ar'=>[
                'required',
                'unique:classrooms,name->ar',
                'max:100',
                'regex:/^[\p{Arabic}\s]+$/u',
            ],
            'cost'=>'required',
            'level'=>'required',
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
            'level.required'=>__('eduLevel.Sorry! you have to create Educational Level first'),
        ];
    }
}
