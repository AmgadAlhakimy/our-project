<?php

namespace App\Http\Requests\Subject;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSubjectRequest extends FormRequest
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
            'name'=>"required|unique:subjects,name->en,$this->id",
//            'name' => 'required|email|unique:subjects,name->en,'.$this->id,

            'name_ar'=>"required|unique:subjects,name->ar,$this->id",
        ];
    }
}
