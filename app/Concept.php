<?php

namespace App;

use App\Contracts\HasIcon;
use App\GeneralAttributes\Color;
use App\GeneralAttributes\Title;
use Illuminate\Contracts\Support\Renderable;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Concept implements HasIcon
{
    use \App\Methods\Make\MakeFromConstructor;

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
     * @group unary
     */
    private function _file(string $name): string
    {
        return \resource_path("concepts/{$this->type}/$name");
    }

    /**
     * @group nonary
     */
    public function icon(): Renderable
    {
        return \view($this->type . '.icon');
    }

    /**
     * TODO Support localization if the file is a .php.
     * @group nonary
     */
    public function standardRule(): \Traversable
    {
        return $this->_text("standard-rule");
    }

    /**
     * @group unary
     */
    private function _text(string $name): \Traversable
    {
        return new \ArrayIterator(\file($this->_file("$name.txt")));
    }

    /**
     * @group unary
     */
    private function _php(string $name): \Traversable
    {
        return require $this->_file("$name.php");
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
