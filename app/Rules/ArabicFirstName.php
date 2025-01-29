<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ArabicFirstName implements ValidationRule
{
    protected $compoundPrefixes = [
        'عبد', 'نور', 'سيف', 'زين', 'علاء', 'شمس', 'صدر', 'فخر', 'بدر',
        'تقي', 'حسام', 'محب', 'سراج', 'كريم', 'نجم', 'رؤوف', 'أمان', 'نصير', 'رفيق', 'هادي'
    ];

    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Ensure it's not empty
        if (empty($value)) {
            $fail(trans('validation.required'));
            return;
        }

        // Ensure it's only Arabic letters and spaces
        if (!preg_match('/^[\p{Arabic}\s]+$/u', $value)) {
            $fail(trans('validation.arabic letters'));
            return;
        }

        // Ensure max length of 10 characters
        if (mb_strlen($value, 'UTF-8') > 10) {
            $fail(trans('validation.max first name'));
            return;
        }

        // Split by spaces
        $parts = explode(' ', trim($value));

        // If there is no space (single word), it's valid
        if (count($parts) === 1) {
            return;
        }

        // If two words and the first one is in our list, allow it
        if (count($parts) === 2 && in_array($parts[0], $this->compoundPrefixes)) {
            return;
        }

        // Otherwise, fail the validation
        $fail(trans('validation.first name two words'));
    }
}
