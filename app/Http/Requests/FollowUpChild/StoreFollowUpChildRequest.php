<?php

namespace App\Http\Requests\FollowUpChild;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreFollowUpChildRequest extends FormRequest
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
//            "subject.*"  => 'required',
//            "comment.*"  => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'subject.*.required'=>'please fill all fields',
        ];
    }
}
