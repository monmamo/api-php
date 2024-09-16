<?php

namespace App\Options;

use App\Casts\Meta\OptionalDate;
use App\Casts\Year;
use App\Concerns\InnerObject;
use App\Concerns\Optional\SelectThroughFilter;
use App\Contracts\HasValue;
use App\Contracts\Normalizable;
use App\Contracts\Optional;
use App\Enums\DateFormats;
use App\Methods\Count\CountIsAlwaysOne;
use App\Methods\MagicToString\ToStringFromAsString;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Castable;

/**
 * 💢
 * - We can't extend \Carbon\Carbon because it has its own get method.
 * - PHP doesn't allow users to implement the \DateTimeInterface.
 *
 * DO NOT use these:
 * - \App\Concerns\AlwaysSingleValue
 * - \App\Concerns\AlwaysDefined (handled by \App\Concerns\InnerObject)
 */
final class DateTimeOption implements Castable, HasValue, Normalizable, Optional
{
    use CountIsAlwaysOne;
    use InnerObject;
    use SelectThroughFilter; // WARNING We may need to implement specific ::reject and ::select.
    use ToStringFromAsString;

    private Carbon $_inner_value;

    /**
     * Constructor.
     *
     * @group binary
     * @group magic
     * @group mutator
     *
     * @uses \Carbon\Carbon::__construct
     *
     * @return void
     */
    public function __construct(mixed $datetime = 'now', ?\DateTimeZone $timezone = null)
    {
        $this->_inner_value = new Carbon($datetime, $timezone);
    }

    /**
     * Invoker.
     *
     * Retrieves the inner value or pipes it through any number of transforms.
     *
     * 💡 This makes this object callable, eliminating the need for a tap method.
     *
     * @implements \App\Contracts\TransformativeInvoker::__invoke
     * @group magic
     * @group nonary
     *
     * @param mixed[] $transforms The transforms to apply to the inner value.
     *
     * @uses \App\Callables\normalizeTransform
     */
    public function __invoke(...$transforms)
    {
        $result = $this->_inner_value;

        foreach (\App\Callables\normalizeTransform($transforms) as $transform) {
            $result = $transform($result);
        }
        return $result;
    }

    /**
     * @implements \App\Concerns\InnerObject::object
     * @group nonary
     * @group resolving
     */
    protected function object(): object
    {
        return $this->_inner_value;
    }

    /**
     * Runs the given Closure bound to this item then returns the result.
     *
     * @group accessor
     * @group unary
     *
     * @param null|callable $predicate_callable Callback to execute on the inner value.
     *
     * @uses \App\Callables\makeClosure
     * @uses \App\Dumping\dump
     * @uses \App\Options\wrap
     * @uses \assert (native) If enabled, and the given assertion is false, throws an exception.
     * @uses \Closure::bindTo
     * @uses \LogicException::__construct
     *
     * @throws \AssertionError
     * @throws \LogicException
     */
    public function assert(mixed $predicate_callable): static
    {
        try {
            $closure = \App\Callables\makeClosure($predicate_callable);
            \assert($closure->bindTo($this->_inner_value));
            return \App\Options\wrap($this);
        } catch (\AssertionError $exception) {
            \App\Dumping\dump($this); // dumps depending on environment and verbosity
            throw new \LogicException('assertion against proxy failed');
        } catch (\Throwable $exception) {
            \App\Dumping\dump($this); // dumps depending on environment and verbosity
            throw $exception;
        }
    }

    /**
     * Returns a representation of this object as a string.
     *
     * @implements \App\Interfaces\Contracts\Stringable::asString
     * @group accessor
     * @group nonary
     * @group reductive
     */
    public function asString(): string
    {
        return DateFormats::InternationalDateTime->format($this->_inner_value);
    }

    /**
     * Returns the caster class to use when casting from / to this cast target.
     *
     * @implements \Illuminate\Contracts\Database\Eloquent\Castable::castUsing
     *
     * @param array<string, mixed> $arguments
     */
    public static function castUsing(array $arguments): string
    {
        return OptionalDate::class;
    }

    /**
     * @implements \App\Contracts\Dumps::dump
     * @group fluent
     * @group nonary
     *
     * @uses \App\Dumping\dump
     */
    public function dump(): static
    {
        \App\Dumping\dump($this->_inner_value); // 🔒
        return $this;
    }

    public static function endOfYear(?int $year = null): static
    {
        return new static(Year::endOfYear($year ?? \date('Y')));
    }

    /**
     * Returns whether a candidate value is "equal" to this value.
     *
     * This method allows objects to be used as keys in structures such as Ds\Map and Ds\Set, or any other lookup structure that honors this interface.
     *
     * @see https://www.php.net/manual/en/ds-hashable.equals.php
     *
     * @implements \App\Interfaces\Contracts\Equality::equals
     * @implements \Ds\Hashable::equals
     * @group comparative
     * @group reductive
     *
     * @param mixed $value The value to compare to this object.
     *
     * @return boolean
     */
    public function equals(mixed $value): bool
    {
        //TODO implement
        return false;
    }

    /**
     * @implements \App\Contracts\Foldable::foldLeft
     * @group binary
     *
     * @uses \App\Options\foldLeft
     * @uses \App\Options\foldLeft
     */
    public function foldLeft($initial_value, $callable)
    {
        return \App\Options\foldLeft($callable, $initial_value, $this->_inner_value);
    }

    /**
     * @implements \App\Contracts\Foldable::foldRight
     * @group binary
     *
     * @uses \App\Options\foldRight
     * @uses \App\Options\foldRight
     */
    public function foldRight($initial_value, $callable)
    {
        return \App\Options\foldRight($callable, $initial_value, $this->_inner_value);
    }

    /**
     * Returns the "normal" value of the object, as defined by \App\Casts\NormalScalar.
     *
     * @implements \App\Contracts\Normalizable::normalized
     * @group nonary
     */
    public function normalized(): string|int|float|bool|null|\DateTimeInterface
    {
        return $this->_inner_value;
    }

    // /**
    //  *
    //  *
    //  * @var \Carbon\Carbon
    //  */
    // private \Carbon\Carbon $_inner_value;

    // /**
    //  *
    //  * @implements \DateTimeInterval::diff
    //  * @group passthrough
    //  * @uses \Carbon\Carbon::diff
    //  */
    // public function diff(\DateTimeInterface $targetObject, bool $absolute = false): \DateInterval{
    // return $this->_inner_value->diff($targetObject,  $absolute );
    // }
    // /**
    //  *
    //  * @implements \DateTimeInterval::format
    //  * @group passthrough
    //  * @uses \Carbon\Carbon::format
    //  */
    // public function format(string $format): string{
    // return $this->_inner_value->format($format);
    // }
    // /**
    //  *
    //  * @implements \DateTimeInterval::getOffset
    //  * @group passthrough
    //  * @uses \Carbon\Carbon::getOffset
    //  */
    // public function getOffset(): int{
    // return $this->_inner_value->getOffset();
    // }
    // /**
    //  *
    //  * @implements \DateTimeInterval::getTimestamp
    //  * @group passthrough
    //  * @uses \Carbon\Carbon::getTimestamp
    //  */
    // public function getTimestamp(): int{
    // return $this->_inner_value->getTimestamp();
    // }
    // /**
    //  *
    //  * @implements \DateTimeInterval::getTimezone
    //  * @group passthrough
    //  * @uses \Carbon\Carbon::getTimezone
    //  */
    // public function getTimezone(): \DateTimeZone|false{
    // return $this->_inner_value->getTimezone();
    // }
    // /**
    //  *
    //  * @implements \DateTimeInterval::__wakeup
    //  * @group passthrough
    //  * @group magic
    //  * @uses \Carbon\Carbon::__wakeup
    //  */
    // public function __wakeup(): void{
    // $this->_inner_value->__wakeup();
    // }
}
