<?php

namespace App\Http\Requests\FollowUpChild;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFollowUpChildRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            "homework.*"  => 'required',
            "bath"  => 'required',
            "snack"  => 'required',
            "food"  => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'homework.*.required'=>__('follow_up.homework field is required')
        ];
    }
}
