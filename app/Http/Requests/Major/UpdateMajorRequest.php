<?php

namespace App\Http\Requests\Major;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMajorRequest extends FormRequest
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
        $major_id = $this->route('major');
        return [
            'name' => ['required','max:50',
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
                Rule::unique('majors',
                    'name->en')->ignore($major_id),
            ],
            'name_ar' => ['required','max:50',
                'regex:/^[\p{Arabic}\s]+[\p{Arabic}0-9]*$/u',
                Rule::unique('majors',
                    'name->ar')->ignore($major_id),
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
