<?php

namespace App\Http\Requests\Activity;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateActivityRequest extends FormRequest
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
        $id = $this->route('activity');
        return [
            'name' => ['required',
                Rule::unique('activities',
                    'name->en')->ignore($id),
                'max:100',
                'regex:/^[a-zA-Z\s]+$/',
            ],
            'name_ar' => ['required',
                Rule::unique('activities',
                    'name->ar')->ignore($id),
                'max:100',
                'regex:/^[\p{Arabic}\s]+$/u',
            ],
            'location' => ['required', 'max:100'],
            'location_ar' => ['required', 'max:100'],
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
