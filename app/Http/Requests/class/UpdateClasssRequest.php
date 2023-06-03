<?php

namespace App\Http\Requests\class;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClasssRequest extends FormRequest
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
            'name'=>['required', 'unique:classses', 'max:50'],
            'cost'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'This filed is required',
            'name.unique'=>'You have already saved this class',
            'name.max'=>'The maximum length is 50',
            'cost.required'=>'This filed is required',
        ];
    }
}
