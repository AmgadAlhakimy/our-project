<?php

namespace App\Http\Requests\activity;

use Illuminate\Foundation\Http\FormRequest;

class StoreActivityRequest extends FormRequest
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
            'name_ar' => ['required', 'max:100'],
            'location' => ['required', 'max:100'],
            'location_ar' => ['required', 'max:100'],
        ];
    }
}
