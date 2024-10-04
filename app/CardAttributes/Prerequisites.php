<?php

namespace App\CardAttributes;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Arr;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Prerequisites implements Renderable
{
    protected readonly array $lines;

    public function __construct(
        $lines = [],
        public readonly int $y = 500, 
        public readonly string $color = '#000000',
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
                [
                    'x' => '50%',
                    'dy' => config('card-design.secondary_rule_height'),
                    'class'=>"smallrule"
                ],
                $line,
            );
        }

        if (\count($tspans) > 0) {
            return \App\Strings\html(
                'text',
                [ 'y' => $this->y, 'filter' => 'url(#solid)'],
                ...$tspans,
            );
        }

        return '';
    }
}
