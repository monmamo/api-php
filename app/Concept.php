<?php

namespace App;

use App\Contracts\HasIcon;
use App\GeneralAttributes\Color;
use App\GeneralAttributes\Title;
use Illuminate\Contracts\Support\Renderable;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Concept implements HasIcon
{
    protected ?string $color = null;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @return void
     */
    public function __construct(
        protected readonly string $type,
    ) {}

    /**
     * @group nonary
     */
    public function color(): string|array
    {
        return $this->color ??= \value(function () {
            $reflection = new \ReflectionClass($this);
            $attributes = $reflection->getAttributes(Color::class);
            $attribute = $attributes[0] ?? throw new \LogicException();
            return $attribute->getArguments()[0]->value;
        });
    }

    /**
     * @group nonary
     */
    public function icon(): Renderable
    {
        return \view($this->type . '.icon');
    }

    /**
     * @group nonary
     */
    public function standardRule(): \Traversable
    {
        return new \ArrayIterator(file(resource_path("concepts/$this->type/standard-rule.txt")));
    }

    /**
     * @group nonary
     */
    public function title(): string
    {
        $reflection = new \ReflectionClass($this);
        $attributes = $reflection->getAttributes(Title::class);

        if (\count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

        return $this->type;
    }
}
