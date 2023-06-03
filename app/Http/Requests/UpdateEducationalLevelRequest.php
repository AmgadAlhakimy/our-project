<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required', 'unique:educational_levels', 'max:100'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'This filed is required',
            'name.unique'=>'You have already saved this educational level',
            'name.max'=>'The maximum length is 100',
        ];
    }
}
