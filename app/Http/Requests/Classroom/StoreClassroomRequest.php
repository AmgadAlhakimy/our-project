<?php

namespace App\Http\Requests\Classroom;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroomRequest extends FormRequest
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
            'name' => ["required","unique:classrooms,name->en", "max:100"],
            "name_ar"=>["required", "unique:classrooms,name->ar", "max:100"],
            'cost'=>'required',
            'level'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'level.required'=>__('eduLevel.Sorry! you have to create Educational Level first'),
        ];
    }
}
