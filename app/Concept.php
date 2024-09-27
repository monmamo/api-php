<?php

namespace App;

use App\Contracts\HasIcon;
use App\GeneralAttributes\Color;
use App\GeneralAttributes\Title;
use App\Methods\Make\MakeFromConstructor;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Concept implements HasIcon
{
    use MakeFromConstructor;

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
     * @group unary
     */
    private function _file(string $name): string
    {
        return \resource_path("concepts/{$this->type}/{$name}");
    }

    /**
     * @group unary
     */
    private function _php(string $name): \Traversable
    {
        return require $this->_file("{$name}.php");
    }

    /**
     * @group unary
     */
    private function _text(string $name): \Traversable
    {
        return new \ArrayIterator(\file($this->_file("{$name}.txt")));
    }

    /**
     * @group nonary
     */
    public static function all(): \Traversable
    {
        return \collect(Storage::disk('concepts')->directories())->sort();
    }

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
     * TODO Support localization if the file is a .php.
     *
     * @group nonary
     */
    public function standardRule(): \Traversable
    {
        $path = $this->_file('standard-rule.txt');

        if (\file_exists($path)) {
            yield from \file($path);
            return;
        }
    }

    /**
     * @group nonary
     */
    public function staticonLabel(): string
    {
        $path = $this->_file('staticon-label.txt');

        if (\file_exists($path)) {
            return \file_get_contents($path);
        }
        return \strtoupper($this->type);
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
