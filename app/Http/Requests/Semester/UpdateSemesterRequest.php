<?php

namespace App\Http\Requests\Semester;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSemesterRequest extends FormRequest
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
            'name'=>['required', 'unique:semesters', 'max:100'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'This filed is required',
            'name.unique'=>'You have already saved this class',
            'name.max'=>'The maximum length is 100',
        ];
    }
}
