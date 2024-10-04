<?php

namespace App;

use App\Contracts\HasIcon;
use App\GeneralAttributes\Color;
use App\GeneralAttributes\Title;
use App\Methods\Make\MakeFromConstructor;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;
use Traversable;

#[\Attribute(\Attribute::TARGET_CLASS + \Attribute::IS_REPEATABLE)]
class Concept implements HasIcon, Renderable
{
    use MakeFromConstructor;

    private static int $group_x = 0;

    protected ?string $color = null;

    public readonly string $icon_color;

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
    ) {
        $spec_pieces = \explode(':', $type);
        $this->type = $spec_pieces[0];
        $this->value = $value ?? $spec_pieces[1] ?? false;
        $this->icon_color = $this->value === false ? 'black' : '#808080';
    }

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
    private function _php(string $name): Traversable
    {
        return require $this->_file("{$name}.php");
    }

    /**
     * @group nonary
     */
    private function _renderBladePieces(): Traversable
    {
        yield \App\Strings\html('rect', ['x' => '0', 'y' => '0', 'width' => '512', 'height' => '640', 'fill' => '#ffffff', 'fill-opacity' => '50%']);
        yield \App\Strings\html('g', ['fill' => $this->icon_color, 'fill-opacity' => 1], $this->icon());

        if (isset($badge)) {
            yield \App\Strings\html('g', ['class' => 'concept-icon-badge', 'fill' => '#000000', 'fill-opacity' => '1', 'filter' => 'url(#icon-overlay-shadow)'], \view($badge . '.icon'));
        }

        if ($this->value !== false) {
            yield \App\Strings\html('text', ['class' => 'value', 'x' => '256px', 'y' => '440px', 'filter' => 'url(#icon-overlay-shadow)'], $this->value); //  'textLength' => '100%'
        }
        yield \App\Strings\html('text', ['class' => 'gloss', 'x' => '256px', 'y' => '590px'], $this->staticonLabel());
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
        return \collect(Storage::disk('concepts')->directories())->sort();
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
    public function icon(): Renderable
    {
        return \view($this->type . '.icon');
    }

    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function render()
    {
        $overflow_ratio = 0.25;

        $html = \App\Strings\html(
            'svg',
            [
                // intentionally oversized
                'id' => $this->type . '-staticon',
                'x' => self::$group_x - \config('card-design.concept.icon-size') * $overflow_ratio,
                'y' => 0,
                'width' => \config('card-design.concept.icon-size') * (1 + 2 * $overflow_ratio),
                'height' => \config('card-design.concept.box-height'),
                'viewBox' => \App\Strings\viewBox(x: 0, y: 0, width: 512, height: 640, horizontal_overflow: $overflow_ratio),
                'xmlns' => 'http://www.w3.org/2000/svg',
            ],
            \App\Strings\html(
                'g',
                ['class' => 'stat'],
                \App\Strings\render(...$this->_renderBladePieces()),
            ),
        );

        self::$group_x += \config('card-design.concept.icon-size');

        return $html;
    }

    public static function setGroupCount(int $count): void
    {
        self::$group_x = \config('card-design.viewbox.width') / 2 - \config('card-design.concept.icon-size') * $count / 2;
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
