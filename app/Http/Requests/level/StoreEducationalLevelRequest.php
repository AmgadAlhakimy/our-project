<?php

namespace App\Http\Requests\level;

use App\Models\EducationalLevel;
use Illuminate\Foundation\Http\FormRequest;

class StoreEducationalLevelRequest extends FormRequest
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
            'name' => "required|unique_translation:educational_levels",
            "name_ar"=>["name->ar"=>["required","unique:educational_levels", "max:100"]],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=> 'name filed is required',
            'name.unique'=> 'name filed is unique',
        ];
    }
}
