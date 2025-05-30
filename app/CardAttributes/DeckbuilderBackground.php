<?php

namespace App\CardAttributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
trait DeckbuilderBackground
{
    /**
     * @group nonary
     */
    public function background(): \Traversable
    {
        yield <<<'HTML'
<defs>
    <linearGradient x1="0" x2="1" y1="1" y2="0" id="gradient">
    <stop offset="0%" stop-color="#4050b5" stop-opacity="1"></stop>
    <stop offset="100%" stop-color="#0094b5" stop-opacity="1"></stop>
</linearGradient>

<pattern id="pattern" width="20" height="20" patternTransform="scale(2)" patternUnits="userSpaceOnUse"><path fill="none" stroke="#2072b5" stroke-linecap="square" d="M3.25 10h13.5M10 3.25v13.5"/></pattern>

</defs>

<x-card.background fill="url(#gradient)" />
<x-card.background fill="url(#pattern)" />
HTML;
    }
}
