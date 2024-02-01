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
                Rule::unique('activities','name->en')->ignore($id),
                'max:100'],
            'name_ar' => ['required',
                Rule::unique('activities','name->ar')->ignore($id),
                'max:100'],
            'location' => ['required', 'max:100'],
            'location_ar' => ['required', 'max:100'],
        ];
    }
}
