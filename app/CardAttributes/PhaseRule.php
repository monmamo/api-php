<?php

namespace App\CardAttributes;

use Illuminate\Support\Facades\Blade;

#[\Attribute(\Attribute::TARGET_CLASS)]
class PhaseRule
{
    protected $y;

    public readonly array $lines;

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
        public readonly string $phase,
        ?int $y = null,
        ...$lines,
    ) {
        $this->y = $y;
        $this->lines = $lines;
    }

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function render()
    {
        $tspans = [];

        foreach (\App\Strings\explode_lines($this->lines) as $line) {
            $tspans[] = \App\Strings\html(
                'x-card.normalrule',
                [],
                $line,
            );
        }

        // \dd(\App\Strings\html(
        //     'x-card.phaserule',
        //     ['y' => $this->y, 'type' => $this->phase, 'lines' => \count($tspans)],
        //     \App\Strings\html('text', [], ...$tspans)
        // ));

        if (\count($tspans) > 0) {
            return Blade::render(
                (string) \App\Strings\html(
                    'x-card.phaserule',
                    ['y' => $this->y, 'type' => $this->phase, 'lines' => \count($tspans)],
                    \App\Strings\html('text', [], ...$tspans),
                ),
            );
        }

        return '';
    }
}
