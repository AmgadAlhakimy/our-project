<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueValueIgnore implements Rule
{
    protected $table;
    protected $column;
    protected $excludeId;

    /**
     * Create a new rule instance.
     *
     * @param string $table
     * @param string $column
     * @param int|null $excludeId
     */
    public function __construct(string $table, string $column, int $excludeId = null)
    {
        $this->table = $table;
        $this->column = $column;
        $this->excludeId = $excludeId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $query = DB::table($this->table)
            ->where($this->column, $value);

        if ($this->excludeId) {
            $query->where('id', '!=', $this->excludeId);
        }

        return !$query->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be unique.';
    }
}
