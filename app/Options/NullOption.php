<?php

namespace App\Options;

use App\Concerns\AlwaysUndefined;
use App\Concerns\Optional\NoOffsets;
use App\Concerns\Optional\NoProperties;
use App\Contracts\Emptyable;
use App\Contracts\Equality;
use App\Contracts\HasValue;
use App\Contracts\Mappable;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Methods\Equals\EqualsNothing;
use App\Methods\MagicGet\MagicGetNotValid;
use App\Methods\MagicInvoke\InvokeDoesNothing;
use App\States\Scalarable;
use App\Strings\InlineText;
use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Database\Grammar;

/**
 * A null optional. Return an instance of this to represent a null or empty value.
 *
 * Use this instead of \PhpOption\None when you want to represent a null value.
 *
 * This option returns null. If you want to throw a no-value exception, return this instead:
 * new \App\Options\ThrowingOption(throwable: new \ValueError(__( "no-value")),context_to_dump: compact('this'))
 *
 * Do not use \App\Concerns\AlwaysEmpty in here.
 *
 * Do not implement these interfaces:
 * - \App\Contracts\HasValue
 */
class NullOption implements Emptyable, Equality, Expression, Mappable, Normalizable, Optional, Scalarable
{
    use AlwaysUndefined;
    use EqualsNothing;
    use InvokeDoesNothing;
    use MagicGetNotValid;
    use NoOffsets;
    use NoProperties;

    /**
     * Binary operator for the initial value and the option's value.
     *
     * @implements \App\Contracts\Foldable::foldLeft
     *
     * @template S
     *
     * @param callable(S, T):S $callable
     *
     * @return S
     */
    final public function foldLeft($initialValue, $callable)
    {
        return $initialValue;
    }

    /**
     * foldLeft() but with reversed arguments for the callable.
     *
     * @implements \App\Contracts\Foldable::foldRight
     *
     * @template S
     *
     * @param callable(T, S):S $callable
     *
     * @return S
     */
    final public function foldRight($initialValue, $callable)
    {
        return $initialValue;
    }

    /**
     * Returns the value of the expression.
     *
     * Ensures that this value is injected into a query as NULL.
     *
     * @implements \Illuminate\Contracts\Database\Query\Expression::getValue
     * @group unary
     *
     * @return float|int|string
     */
    public function getValue(Grammar $grammar)
    {
        return 'NULL';
    }

    /**
     * Returns the "normal" value of the object, as defined by \App\Casts\NormalScalar.
     *
     * @implements \App\Contracts\Normalizable::normalized
     * @group nonary
     */
    public function normalized(): string|int|float|bool|null|\DateTimeInterface
    {
        return null;
    }

    /**
     * @group nonary
     *
     * @uses \App\Strings\InlineText::__construct
     */
    public function title(): InlineText
    {
        return new InlineText('(null optional)');
    }

    /**
     * @group factory
     * @group nonary
     */
    public static function withValue(): self
    {
        return new class() extends NullOption implements HasValue, Normalizable
        {
            /**
             * Returns the "normal" value of the object, as defined by \App\Casts\NormalScalar.
             *
             * @implements \App\Contracts\Normalizable::normalized
             * @group nonary
             */
            final public function normalized(): string|int|float|bool|null|\DateTimeInterface
            {
                return null;
            }

            /**
             * Returns the value if available, or throws an exception otherwise.
             *
             * @implements \App\Contracts\HasValue::get
             * @group nonary
             */
            final public function get(): void {}
        };
    }
}
