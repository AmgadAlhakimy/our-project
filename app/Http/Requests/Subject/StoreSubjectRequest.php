<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
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
            'name'=>'required|max:50|unique:subjects,name->en',
            'name_ar'=>'required|max:50|unique:subjects,name->ar',
        ];
    }
    public function messages(): array
    {
        return [
            'sub_name.required'=>'This filed is required',
            'sub_name.max'=>'The maximum length is 50 letters',
        ];
    }
}
