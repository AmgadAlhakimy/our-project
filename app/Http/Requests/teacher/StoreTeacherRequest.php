<?php

namespace App\Http\Requests\teacher;

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
            'name' => ['required', 'max:100'],
            'name_ar' => ['required', 'max:100'],
            'contact' => ['required', 'numeric'],
            'address' => ['required', 'max:100'],
            'address_ar' => ['required', 'max:100'],
            'qualification' => ['required', 'max:100'],
            'qualification_ar' => ['required', 'max:100'],
            'salary' => ['required', 'numeric'],
            'major' => ['required', 'max:100'],
            'major_ar' => ['required', 'max:100'],
        ];
    }
}
