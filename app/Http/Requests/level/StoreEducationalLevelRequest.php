<?php

namespace App\Http\Requests\level;

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
            "name_ar"=>["name->ar"=>["required", "unique:educational_levels", "max:100"]],
            'name' => "required|unique:educational_levels,name,en"
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
