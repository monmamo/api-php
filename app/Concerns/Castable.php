<?php

namespace App\Concerns;

use App\GeneralAttributes\Gloss;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

/**
 * A simple implementation for the interface \Illuminate\Contracts\Database\Eloquent\Castable.
 *
 * usage:
 * use \App\Concerns\Castable;
 *
 * Can be used in a \Illuminate\Database\Eloquent\Casts\Attribute constructor:
 * public function __construct()
 * {
 * parent::__construct(
 *     get : static::valueFromAttributes(...),
 *     set : static::attributesFromValue(...),
 * );
 * }
 */
trait Castable
{
    /**
     * Transforms a cast value into a raw value that can be stored in the database.
     *
     * @see app/Methods/attributesFromValue.md
     *
     * @group attribute-setter
     * @group unary
     */
    abstract public static function attributesFromValue(mixed $value): string|array;

    /**
     * Returns the name of the caster class to use when casting from/to this cast target.
     *
     * 💢 The interface \Illuminate\Contracts\Database\Eloquent\Castable is useless on an enum because the framework performs enum resolution before class resolution.
     *
     * @see https://laravel.com/docs/10.x/eloquent-mutators#castables
     * @see https://github.com/laravel/framework/issues/47547
     *
     * @implements \Illuminate\Contracts\Database\Eloquent\Castable::castUsing
     * @group factory
     * @group variadic
     *
     * @param array<string, mixed> $arguments
     */
    public static function castUsing(array $arguments): CastsAttributes
    {
        $cast = new #[Gloss('Cast')] class() implements CastsAttributes
        {
            public $parent_class;

            /**
             * Transforms the attribute from the underlying model values or the given value or atributes.
             *
             * @implements \Illuminate\Contracts\Database\Eloquent\CastsAttributes::get
             * @group accessor
             * @group attribute-getter
             * @group variadic
             *
             * @param \Illuminate\Database\Eloquent\Model $model Model being polled.
             * @param string $key Key of the value on which to operate.
             * @param mixed $value Value from the database.
             * @param array $attributes The attributes of the model.
             */
            public function get(Model $model, string $key, mixed $value, array $attributes)
            {
                return $this->parent_class::valueFromAttributes($value, $attributes);
            }

            /**
             * Transforms a cast value into a raw value that can be stored in the database.
             *
             * @implements \Illuminate\Contracts\Database\Eloquent\CastsAttributes::set
             * @group attribute-setter
             * @group mutator
             * @group variadic
             *
             * @param \Illuminate\Database\Eloquent\Model $model Model being polled.
             * @param string $key Key of the value on which to operate.
             * @param mixed $value Value from the database.
             * @param array $attributes The attributes of the model.
             *
             * @uses \App\Attributes\getByKey
             */
            public function set(Model $model, string $key, mixed $value, array $attributes): string|array
            {
                return $this->parent_class::attributesFromValue(\App\Attributes\getByKey($key, $value, $attributes));
            }
        };

        $cast->parent_class = static::class;
        return $cast;
    }

    /**
     * Transforms the attribute from the underlying model values or the given value or atributes.
     *
     * @see app/Methods/valueFromAttributes.md
     *
     * @group attribute-getter
     * @group variadic
     *
     * @param mixed $value Value from the database. May always be null.
     * @param array $attributes The attributes of the model.
     */
    abstract public static function valueFromAttributes(mixed $value, array $attributes);
}
