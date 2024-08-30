<?php

namespace App\Concerns;

use App\Facades\Environment;
use App\Methods\GenericCall;
use App\Methods\Make\MakeFromConstructor;

/**
 * implements  \App\Contracts\Plucks.
 */
trait OffsetFunctionality
{
    use GenericCall;
    use MakeFromConstructor;

    private int|string $_offset;

    /**
     * @group unary
     * @group magic
     * @group accessor
     * @group nonary
     */
    protected function getOffset(): int|string
    {
        return $this->_offset;
    }

    /**
     * @group accessor
     * @group nonary
     */
    protected function offsetSet(): bool
    {
        return isset($this->_offset);
    }

    /**
     * @group binary
     * @group functional
     *
     * @uses \App\Enums\Environments::rescue
     * @uses \App\Offset\unwrap
     * @uses \App\Strings\TypeIndicator::__construct
     *
     * @throws \App\Strings\TypeIndicator
     */
    protected function setOffset(mixed $offset_raw, ?callable $is_valid_fn = null): void
    {
        $is_valid_fn ??=
            /**
             * @group unary
             *
             * @uses \trim (native) Strips whitespace from the beginning and end of a string.
             * @uses \is_int (native) Returns whether the given variable is an integer.
             * @uses \is_string (native) Returns whether a variable is a string.
             * @uses \trim (native) Strips whitespace from the beginning and end of a string.
             *
             * @throws \UnhandledMatchError
             */
            static function (mixed $resolved_offset): bool {
                return match (true) {
                    \is_int($resolved_offset) => $resolved_offset >= 0,
                    \is_string($resolved_offset) => \trim($resolved_offset) !== '',
                };
            };

        $this->_offset = \App\Offset\unwrap($offset_raw);

        if ($is_valid_fn($this->_offset)) {
            return;
        }

        Environment::rescue(
            value: $offset_raw,
            expectation: 'valid string or integer offset',
        );
    }

    /**
     * Plucks a value from a value or attribute.
     *
     * @implements \App\Contracts\Plucks::pluckForAttribute
     * @group accessor
     * @group attribute-getter
     * @group variadic
     *
     * @uses \App\Options\fromValueOrAttribute
     */
    final public function pluckForAttribute(mixed $value, array $attributes): mixed
    {
        return \App\Options\fromValueOrAttribute($value, $attributes, $this->_offset);
    }

    /**
     * Plucks a value from a source.
     *
     * @implements \App\Contracts\Plucks::pluckOffset
     * @group unary
     *
     * @uses \App\Options\fromOffset
     *
     * @throws \Throwable from \App\Options\fromOffset
     */
    final public function pluckOffset(mixed $source): mixed
    {
        return \App\Options\fromOffset($source, $this->_offset);
    }

    /**
     * Plucks a value from a source.
     *
     * @implements \App\Contracts\Plucks::pluckProperty
     * @group unary
     *
     * @uses \App\Options\fromProperty
     */
    final public function pluckProperty(mixed $source): mixed
    {
        return \App\Options\fromProperty($source, $this->_offset);
    }
}
