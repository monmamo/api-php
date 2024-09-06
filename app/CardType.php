<?php

namespace App;

#[\Attribute(\Attribute::TARGET_CLASS)]
class CardType implements \App\Contracts\HasIcon
{


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
        protected readonly string $type
    ) {}



    public  function icon(): \Illuminate\Contracts\Support\Renderable
    {
        return view($this->type . '.icon');
    }

    protected ?string $color = null;

    public  function color(): string|array
    {
        return $this->color ??=  value(function () {
            $reflection = new \ReflectionClass($this);
            $attributes = $reflection->getAttributes(\App\GeneralAttributes\Color::class);
            $attribute = $attributes[0] ??  throw new \LogicException();
            return $attribute->getArguments()[0]->value;
        });
    }


    public function standardRule(): \Traversable
    {
        return new \EmptyIterator;
    }

    public function title(): string
    {
        $reflection = new \ReflectionClass($this);
        $attributes = $reflection->getAttributes(\App\GeneralAttributes\Title::class);

        if (count($attributes) > 0) {
            return $attributes[0]->getArguments()[0];
        }

        return $this->type;
    }
}
