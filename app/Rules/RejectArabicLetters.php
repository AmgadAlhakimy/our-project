<?php
namespace App\Rules;
namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class RejectArabicLetters implements ValidationRule
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
        // Check if the value contains Arabic letters using regular expression
        if (preg_match('/\p{Arabic}/u', $value)) {
            // Reject if Arabic letters are found
            $fail(trans('validation.reject arabic letters'));
        }
    }
}
