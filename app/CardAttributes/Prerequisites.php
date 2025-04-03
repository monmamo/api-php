<?php

namespace App\CardAttributes;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Arr;

#[\Attribute(\Attribute::TARGET_CLASS)]
class Prerequisites implements Renderable
{
    protected readonly array $lines;

    /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group nonary|unary|variadic
     *
     * @uses parent::__construct
     *
     * @return void
     */
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
     * Returns content as a string of HTML.
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
                    'dy' => 25, // leave constant
                    'class' => 'smallrule',
                ],
                match (true) {
                    \is_string($line) => $line,
                    \is_callable($line) => $line(),
                },
            );
        }

        if (\count($tspans) > 0) {
            return \App\Strings\html(
                'text',
                ['y' => $this->y, 'filter' => 'url(#solid)'],
                ...$tspans,
            )->toHtml();
        }

        return '';
    }

      /**
     * Constructor.
     *
     * @group magic
     * @group mutator
     * @group nonary|unary|variadic
     *
     * @uses parent::__construct
     *
     * @return void
     */
    public static function monsterLimit(
        $limit=1,
         int $y = 500,
         string $color = '#000000',
    ) {
        return new self(
            lines: \trans_choice('rules.monster-limit', $limit),
            y:$y,
            color:$color
        );
    }
}
