<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClasssRequest extends FormRequest
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
            'name'=>['required', 'unique:classses', 'max:100'],
            'name_ar'=>['required', 'max:100'],
            'cost'=>'required',
            'level'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'level.required'=>__('eduLevel.Sorry! you have to create Educational level first'),
        ];
    }
}
