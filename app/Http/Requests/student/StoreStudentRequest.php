<?php

namespace App\Http\Requests\student;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:100'],
            'photo'=>['image','mimes:jpg,jpeg,png,gif,svg'],
            'name_ar' => ['required', 'max:100'],
            'address' => ['required', 'max:100'],
            'address_ar' => ['required', 'max:100'],
            'birthdate' => ['required'],
            'place_of_birth' => ['required'],
            'place_of_birth_ar' => ['required'],
            'class' => ['required'],
        ];
    }
    public function messages(): array
    {
        return [

            'class.required' => __('student.first you have to add classes'),
        ];
    }
}
