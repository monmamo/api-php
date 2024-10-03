<?php

namespace App\CardAttributes;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Arr;

#[\Attribute(\Attribute::TARGET_CLASS)]
class FlavorText implements Renderable
{
    protected readonly array $lines;

    public function __construct(
        $lines,
        public readonly int $y = 510,
        public readonly string $color = '#ffffff',
    ) {
        $this->lines = Arr::wrap($lines);
    }

    public function lines(): array
    {
        return $this->lines;
    }

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function render()
    {
        $tspans = [];

        foreach (\App\Strings\explode_lines($this->lines()) as $line) {
            $tspans[] = \App\Strings\html(
                'tspan',
                ['x' => '50%', 'dy' => '25', 'class' => 'flavor', 'text-anchor' => 'middle', 'alignment-baseline' => 'hanging',  'fill' => $this->color],
                $line,
            );
        }

        if (\count($tspans) > 0) {
            return \App\Strings\html(
                'text',
                ['x' => '50%', 'y' => $this->y, 'class' => 'credit', 'text-anchor' => 'middle', 'alignment-baseline' => 'baseline'],
                ...$tspans,
            );
        }

        return '';
    }
}
