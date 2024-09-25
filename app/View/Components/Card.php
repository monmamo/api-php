<?php

namespace App\View\Components;

use App\Concept;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;
use Illuminate\View\View;

class Card extends Component
{
    public function __construct(
        public string $cardNumber,
        public array $spec = [],
        public ?string $cardName = null,
        public float $titleboxOpacity = 1,
        public mixed $concepts = null,
        public int $dx = 0,
        public int $dy = 0,
        public bool $omitCommon = false,
    ) {
        $this->cardName ??= $this->spec['name'];

        // Concepts array: preserve the sequence.
        $this->concepts = \array_map(
            function ($spec) {
                if (\is_string($spec)) {
                    $spec_pieces = \explode(':', $spec);
                    $spec_pieces[1] ??= false;
                    return $spec_pieces;
                }

                throw new \LogicException('Concepts must be strings');
            },
            $this->concepts ?? $this->spec['concepts'] ?? [],
        );
    }

    /**
     * @group nonary
     */
    public function background(): \Traversable
    {
        $background = $this->spec['background'] ?? null;
        yield match (true) {
            $background instanceof View => $background,
            \is_string($background) => Blade::render($background, []),
            \is_null($background) => null
        };

        if ($this->spec['ai'] ?? false) {
            yield \App\Strings\html(
                'text',
                ['x' => '50%', 'y' => '50', 'class' => 'credit', 'text-anchor' => 'middle', 'alignment-baseline' => 'baseline',  'fill' => $this->creditColor()],
                'Generated image',
            );
        }

        if (isset($this->spec['image-credit'])) {
            yield \App\Strings\html(
                'text',
                ['x' => '50%', 'y' => '50', 'class' => 'credit', 'text-anchor' => 'middle', 'alignment-baseline' => 'baseline',  'fill' => $this->creditColor()],
                $this->spec['image-credit'],
            );
        }
    }

    /**
     * @group nonary
     */
    public function content(): \Traversable
    {
        $hero = $this->spec['hero'] ?? null;

        if (\is_string($hero)) {
            yield Blade::render($hero, []);
        }

        \assert(\is_array($this->concepts));

        $prerequisites = $this->spec['prerequisites'] ?? [];

        foreach ($this->concepts as $index => $spec) {
            [$type, $value] = $spec;
            \array_push($prerequisites, ...Concept::make($type)->standardRule());
        }

        $y = 475 + 25 * match (true) {
            isset($this->spec['flavor-text']) => \count($this->spec['flavor-text']),
            default => 1
        };

        yield "<text y=\"{$y}\" filter=\"url(#solid)\">";

        foreach ($prerequisites as $line) {
            yield Blade::render("<x-card.smallrule>{$line}</x-card.smallrule>");
        }
        yield '</text>';

        $content = $this->spec['content'] ?? null;

        if (\is_string($content)) {
            yield Blade::render($content, []);
        }

        // Concept icons.
        $staticon_x ??= \config('card-design.viewbox.width') - 64 * \count($this->concepts);

        foreach ($this->concepts as $index => $spec) {
            [$type, $value] = $spec;
            $concept = Concept::make($type);

            $icon_color = $value === false ? 'black' : '#808080';
            $blade
                = \App\Strings\html('rect', ['x' => '0', 'y' => '0', 'width' => '512', 'height' => '640', 'fill' => '#ffffff', 'fill-opacity' => '50%'])
                . \App\Strings\html('g', ['fill' => $icon_color, 'fill-opacity' => 1], $concept->icon());

            if (isset($badge)) {
                $blade .= \App\Strings\html('g', ['class' => 'concept-icon-badge', 'fill' => '#000000', 'fill-opacity' => '1', 'filter' => 'url(#icon-overlay-shadow)'], \view($badge . '.icon'));
            }

            if ($value !== false) {
                $blade .= \App\Strings\html('text', ['class' => 'value', 'x' => '256px', 'y' => '440px', 'filter' => 'url(#icon-overlay-shadow)'], $value); //  'textLength' => '100%'
            }
            $blade .= \App\Strings\html('text', ['class' => 'gloss', 'x' => '256px', 'y' => '590px'], $concept->staticonLabel());

            yield \App\Strings\html(
                'svg',
                ['id' => $type . '-staticon', 'x' => $staticon_x, 'y' => 370, 'xmlns' => 'http://www.w3.org/2000/svg', 'width' => 64, 'height' => 80, 'viewBox' => '0 0 512 640'],
                \App\Strings\html('g', ['class' => 'stat'], $blade),
            );
            $staticon_x += 64;
        }
    }

    /**
     * @group nonary
     */
    public function creditColor(): string
    {
        return $this->spec['credit-color'] ?? 'white';
    }

    /**
     * @group nonary
     */
    public function flavorText(): string
    {
        if (isset($this->spec['flavor-text'])) {
            $lines = [];

            foreach (\App\Strings\explode_lines($this->spec['flavor-text']) as $line) {
                $lines[] = \App\Strings\html(
                    'tspan',
                    ['x' => '50%', 'dy' => '25', 'class' => 'flavor', 'text-anchor' => 'middle', 'alignment-baseline' => 'hanging',  'fill' => $this->spec['flavor-text-color'] ?? 'white'],
                    $line,
                );
            }
            return \App\Strings\html(
                'text',
                ['x' => '50%', 'y' => '510', 'class' => 'credit', 'text-anchor' => 'middle', 'alignment-baseline' => 'baseline'],
                ...$lines,
            );
        }

        return '';
    }

    /**
     * Get the view / contents that represent the component.
     * This is a point where we can inject a value into the view.
     *
     * @group nonary
     */
    public function render(): View
    {
        if (\is_null($this->cardNumber)) {
            \dump($this, $this->data());
            throw new \Exception('cardNumber must be set before rendering');
        }
        return \view('components.card.index');
    }
}
