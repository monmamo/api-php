<?php

namespace App\Methods\Get;

/**
 * Expects a variadic self::make method.
 */
trait GetExtends
{
    /**
     * Produces a new slug from this slug's pieces and an extension.
     *
     * ❗ The parent method proxies dynamic properties onto methods.
     *
     * @group magic
     * @group accessor
     * @group unary
     * @group accessor-by-key
     * @group selective
     *
     * @param string $extension Extension to append to the slug.
     *
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses self::make
     * @uses \is_iterable (native)
     *
     * @throws \AssertionError
     */
    public function __get(mixed $extension)
    {
        \assert(\is_iterable($this));

        /**
         * Pieces for the new slug.
         *
         * @group multivalue
         * @group ordered
         *
         * @var mixed[]
         */
        $pieces_for_new = [...$this];
        $pieces_for_new[] = $extension;
        return self::make(...$pieces_for_new);
    }
}
