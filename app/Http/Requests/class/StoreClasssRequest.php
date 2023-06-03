<?php

namespace App\Http\Requests\class;

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
            'cost'=>'required',
            'edu_id'=>'required',
        ];
    }
//    public function messages(): array
//    {
//        return [
//            'name.required'=>'This filed is required',
//            'name.unique'=>'You have already saved this class',
//            'name.max'=>'The maximum length is 100',
//            'cost.required'=>'This filed is required',
//            'edu_id.required'=>'Sorry! you have to create Educational level first',
//        ];
//    }
}
