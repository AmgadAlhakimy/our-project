<?php

namespace App\Http\Requests\Level;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEducationalLevelRequest extends FormRequest
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
        $id = $this->route('educational_level');
        return [
            'name' => [
                'required','max:50',
                Rule::unique('educational_levels',
                    'name->en')->ignore($id),
                'regex:/^[A-Za-z\s]+[A-Za-z0-9]*$/',
            ],
            'name_ar' => [
                'required','max:50',
                Rule::unique('educational_levels',
                    'name->ar')->ignore($id),
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
            'name.regex' => __('validation.english letters'),
            'name_ar.regex' => __('validation.arabic letters'),
        ];
    }
}
