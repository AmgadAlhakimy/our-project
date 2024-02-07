<?php

namespace App\Http\Requests\Employee;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
                'required', 'unique:employees', 'max:100',

            ],
//            'photo' => ['image', 'mimes:jpg,jpeg,png,gif,svg', 'max:100'],
            'birthdate' => ['required'],
            'qualification' => ['required', 'max:20'],
            'address' => ['required', 'max:100'],
            'contact1' => ['required', 'numeric'],


        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'This filed is required',
            'name.unique' => 'You have already saved this class',
            'name.max' => 'The maximum length is 100',
            'qualification.max' => 'The maximum length is 20',
            'contact1.numeric' => 'The maximum length is 100',
        ];
    }
}
