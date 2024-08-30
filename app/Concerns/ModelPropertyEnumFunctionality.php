<?php

namespace App\Concerns;

use App\EnumReference;
use App\Facades\Browser;
use App\GeneralAttributes\Selector;
use App\Offset;
use App\QueryFacade;
use App\Strings\SnakeCaseString;

trait ModelPropertyEnumFunctionality
{
    /**
     * @group nonary
     */
    protected function inputSelector(): string
    {
        return 'input[name="' . $this->value . '"]';
    }

    /**
     * @group nonary
     */
    protected function selectSelector(): string
    {
        return 'select[name="' . $this->value . '"]';
    }

    /**
     * @group nonary
     */
    protected function textareaSelector(): string
    {
        return 'textarea[name="' . $this->value . '"]';
    }

    /**
     * @implements \App\Contracts\MakesAlias::asAlias
     * @group nonary
     */
    public function asAlias(): string
    {
        return '@' . $this->name;
    }

    /**
     * Dissolves the object into a stream of pieces.
     *
     * @implements \App\Contracts\Dissolvable::dissolve
     * @group multivalue
     * @group nonary
     *
     * @uses \App\Strings\SnakeCaseString::dissolver
     */
    public function dissolve(): \Traversable
    {
        return SnakeCaseString::dissolver($this->value);
    }

    /**
     * @implements \App\Contracts\Selector::invoke
     * @group variadic
     *
     * @uses \App\Callables\run
     * @uses \App\Contracts\HasSelector::selector
     *
     * @throws \Throwable Any exception thrown out of \App\Callables\run.
     */
    public function invoke(mixed $callable, ...$additional_arguments)
    {
        return \App\Callables\run(
            callable: $callable,
            arguments_to_callable: [$this->selector(), ...$additional_arguments],
            context_to_dump: \compact('this'),
        );
    }

    /**
     * @extends \App\Contracts\EntityProperties::faker
     * @group nonary
     */
    public function makeFake()
    {
        return ($this->faker())();
    }

    /**
     * @group variadic
     *
     * @uses \UnitEnum::cases
     */
    public static function makeObject(array $properties): object
    {
        $object = new class() {};

        foreach (self::cases() as $name => $value) {
            $object->$value = $properties[$value] ?? null;
        }
        return $object;
    }

    /**
     * @group nonary
     *
     * @uses \App\QueryFacade::orderBy
     */
    public function orderByClause(): \Closure
    {
        return QueryFacade::orderBy($this->value);
    }

    /**
     * Plucks a value from a value or attribute.
     *
     * @implements \App\Contracts\Plucks::pluckForAttribute
     * @group accessor
     * @group attribute-getter
     * @group variadic
     *
     * @uses \App\Offset::make
     * @uses \App\Offset::pluckForAttribute
     */
    final public function pluckForAttribute(mixed $value, array $attributes): mixed
    {
        return Offset::make($this->value)->pluckProperty($value, $attributes);
    }

    /**
     * Plucks a value from a source.
     *
     * @implements \App\Contracts\Plucks::pluckOffset
     * @group unary
     *
     * @uses \App\Offset::make
     * @uses \App\Offset::pluckOffset
     */
    final public function pluckOffset(mixed $source): mixed
    {
        return Offset::make($this->value)->pluckOffset($source);
    }

    /**
     * Plucks a value from a source.
     *
     * @implements \App\Contracts\Plucks::pluckProperty
     * @group unary
     *
     * @uses \App\Offset::make
     * @uses \App\Offset::pluckProperty
     */
    final public function pluckProperty(mixed $source): mixed
    {
        return Offset::make($this->value)->pluckProperty($source);
    }

    /**
     * @implements \App\Contracts\HasSelector::selector
     * @group nonary
     * @group passthrough
     *
     * @uses \App\EnumReference::make
     * @uses \App\EnumReference::selector
     * @uses \UnhandledMatchError::__construct
     */
    public function selector(): string
    {
        return EnumReference::make($this)->selector();
    }

    /**
     * @group sugar
     * @group unary
     *
     * @uses \App\Concerns\ModelPropertyEnumFunctionality::asAlias
     * @uses \App\Facades\Browser::type
     */
    public function type(string $text): \Closure
    {
        return Browser::type($this->asAlias(), $text);
    }
}
