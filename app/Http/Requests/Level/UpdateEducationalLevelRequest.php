<?php

namespace App\Http\Requests\Level;

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
//            'email' => 'required|email|unique:users,email,'.$this->user->id,
//            'name'=>'required|unique:educational_levels,name->en,'.$this->id,
            'name' => [
                'required',
                'unique:educational_levels,name->en,' . $this->id
            ],
            'name_ar'=>'required|unique:educational_levels,name->ar,' . $this->id,

        ];
    }
    public function messages(): array
    {
        return [
        ];
    }
}
