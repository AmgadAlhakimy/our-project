<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class RejectEnglishLetters implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute  The name of the attribute being validated.
     * @param  mixed  $value  The value of the attribute.
     * @param  \Closure(string): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the value contains English letters (A-Z, a-z)
        if (preg_match('/[a-zA-Z]/u', $value)) {
            // Reject if English letters are found
            $fail(trans('validation.reject english letters'));
        }
    }
}
