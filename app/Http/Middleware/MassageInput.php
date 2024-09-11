<?php

namespace App\Http\Middleware;

use App\Casts\Meta\TrimmedString;
use App\Constraints\IsStringable;
use App\Enums\LetterProperties;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;

/**
 * Transforms incoming input by trimming whitespace from the beginning and end of the string.
 *
 * This replaces the default Laravel middleware:
 * - App\Http\Middleware\TrimStrings
 * - Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull
 *
 * ❗ This does NOT parse the input. That takes place in \App\Providers\RequestServiceProvider.
 *
 * 🧠 We probably should not actually do this here but handle massaging of input by each field. This only works by the key. Maybe it's better to work with "dirty" requests in the controller than try to "clean" them up here.
 *
 * @see https://laravel.com/docs/9.x/requests#input-trimming-and-normalization
 *
 *
 * @author Laravel
 */
final class MassageInput extends TransformsRequest
{
    /**
     * Transforms the given request value unless its key is in the exclusion list.
     *
     *
     * @author Laravel
     * @extends \Illuminate\Foundation\Http\Middleware\TransformsRequest::transform
     * @group binary
     * @group key-value-signature
     *
     * @param string $key Key of the value on which to operate.
     * @param mixed $value Value to transform.
     *
     * @uses \App\Strings\clean
     * @uses \App\Strings\unwrap
     * @uses \in_array (native) Returns whether a value exists in an array.
     */
    protected function transform($key, $value)
    {
        /**
         * The names of the attributes that should not be trimmed.
         *
         * @author Laravel
         *
         * @var array<int, string>
         */
        static $except;
        $except ??= [
            'current_password',
            'password',
            'password_confirmation',
        ];

        return \in_array($key, $except, true) ?  $value : \App\Strings\clean( \App\Strings\unwrap($value));
    }
}
