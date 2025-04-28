<?php

namespace App;

use App\Contracts\HasIcon;
use App\GeneralAttributes\Color;
use App\GeneralAttributes\Title;
use App\Methods\Make\MakeFromConstructor;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Traversable;

#[\Attribute(\Attribute::TARGET_CLASS + \Attribute::IS_REPEATABLE)]
class Concept implements HasIcon
{
    use MakeFromConstructor;

    public const OVERFLOW_RATIO = 0.25;

    protected ?string $color = null;

    public readonly string $badge;

    public readonly string $type;

    public readonly mixed $value;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group unary
     *
     * @param null|mixed $value
     *
     * @return void
     */
    public function __construct(
        string $type,
        $value = null,
        protected ?string $caption = null,
    ) {
        $spec_pieces = \explode(':', $type);
        $this->type = $spec_pieces[0];
        $this->value = $value ?? $spec_pieces[1] ?? false;
    }

    /**
     * @group unary
     */
    private function _file(string $name): string
    {
        return self::disk()->path("{$this->type}/{$name}");
    }

    /**
     * @group unary
     */
    private function _php(string $name): Traversable
    {
        return require $this->_file("{$name}.php");
    }

    /**
     * @group unary
     */
    private function _text(string $name): Traversable
    {
        return new \ArrayIterator(\file($this->_file("{$name}.txt")));
    }

    /**
     * @group nonary
     */
    public static function all(): Traversable
    {
        return \collect(self::disk()->directories())->sort();
    }

    public function background()
    {
        return \view($this->type . '.background');
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
    public static function disk(): Filesystem
    {
        return Storage::disk('concepts');
    }

    /**
     * @group nonary
     */
    public function hasBackground()
    {
        return View::exists($this->type . '.background');
    }

    /**
     * @group nonary
     */
    public function icon(): Renderable
    {
        try {
            return \view($this->type . '.icon');
        } catch (\Throwable $e) {
            return \App\Strings\html('div', '[' . $e->getMessage() . ']');
        }
    }

    /**
     * @group nonary
     */
    public function label(): string
    {
        return $this->caption ?? $this->staticonLabel();
    }

    /**
     * TODO Support localization if the file is a .php.
     *
     * @group nonary
     */
    public function standardRule(): Traversable
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
