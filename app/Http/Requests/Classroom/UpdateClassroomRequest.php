<?php

namespace App\Http\Requests\Classroom;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClassroomRequest extends FormRequest
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
        $id = $this->route('classroom');
        return [
            'name'=>[
                'required',
                Rule::unique('classrooms','name->en')->ignore($id),
                'max:50'],
            'name_ar' => [
                'required',
                Rule::unique('classrooms', 'name->ar')->ignore($id)
            ],
            'cost'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'This filed is required',
            'name.unique'=>'You have already saved this classroom',
            'name.max'=>'The maximum length is 50',
            'cost.required'=>'This filed is required',
        ];
    }
}
