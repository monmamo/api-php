<?php

namespace App\CardAttributes;

use App\Concept;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Blade;

#[\Attribute(\Attribute::TARGET_CLASS)]
class PhaseRule implements Renderable
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
        public readonly string $phase,
        public ?float $y,
        public ?float $height,
        public bool $repeat,
        public ?string $badge,
        public readonly array $lines,
    ) {
        $this->y = $y;
        $this->lines = $lines;
    }

    /**
     * Returns content as a string of HTML.
     *
     * @return string
     */
    public function render()
    {
        $make_content = function ($content): string {
            $tspans = [];

            foreach (\App\Strings\explode_lines($content) as $content_line) {
                $content_line = \trim($content_line);

                if ($content_line === '') {
                    continue;
                }
                $tspans[] = "<x-card.normalrule>{$content_line}</x-card.normalrule>";
            }
            return Blade::render(\App\Strings\html('text', [], $tspans));
        };

        $slot_html = \trim($slot->toHtml());

        $content = match (true) {
            $slot_html === '' => $make_content($lines),
            $slot_html[0] === '<' => $slot_html,
            default => $make_content($slot_html)
        };

        $height += match (true) {
            \is_array($lines) => \count($lines),
            \is_int($lines) => $lines,
            \is_string($lines) => \is_numeric($lines) ? (int) $lines : \substr_count($lines, "\n") + 1,
            \is_null($lines) => 0,
        } * 35;
        $y ??= \config('card-design.titlebox.y') - $height - 85;

        $concept = Concept::make($this->phase);

        $tspans = \array_map(
            fn ($line) => \App\Strings\html('x-card.normalrule', $line),
            [...\App\Strings\explode_lines($this->lines)],
        );

        $svg_content = [
            \App\Strings\html('rect', ['width' => '100%', 'height' => '100%', 'fill' => '#ffffff', 'fill-opacity' => '100%']),
            \App\Strings\html('g', ['class' => 'concept-icon', 'fill' => '#000000', 'fill-opacity' => '1'], $concept->icon()),
        ];

        if (\is_string($this->badge)) {
            $svg_content[] = \App\Strings\html('g', ['class' => 'concept-icon-badge', 'fill' => '#000000', 'fill-opacity' => '1'], \view($this->badge . '.icon'));
        }

        return \App\Facades\Blade::render(
            'x-svg',
            ['id' => "{$this->phase}-phaserule", 'x' => '0', 'y' => $y, 'width' => \config('card-design.viewbox.width'), 'height' => $height],
            ...$svg_content,
        );
    }
}
