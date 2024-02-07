<?php

namespace App\Http\Requests\Subject;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSubjectRequest extends FormRequest
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
        $subject_id = $this->route('subject');

        return [
            'name' => ['required','max:50',
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
                Rule::unique('subjects',
                    'name->en')->ignore($subject_id),
            ],
            'name_ar' => ['required','max:50',
                'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
                Rule::unique('subjects',
                    'name->ar')->ignore($subject_id),
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
