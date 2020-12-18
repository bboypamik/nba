<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class NoBadwords implements Rule
{
    private $badWord;
    private $attribute;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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

        $this->attribute = $attribute;
        $badWords = ['stupid', 'idiot', 'hate'];
        foreach ($badWords as $badWord){
            if(str::contains($value, $badWord)){
                $this->badWord = $badWord;
            return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The ' .$this->attribute . 'contains forbidden word ' . $this->badWord;
    }
}
