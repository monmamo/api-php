<?php

return [
    'name' => 'Baker\'s Dozen',

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Draw.background') }}
HTML,

    'content' => <<<'HTML'
<text y="500" filter="url(#solid)">
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text>

        <x-card.concept.staticon type="Draw" />
        <x-card.phaserule type="Draw" lines="4"><text>
            <x-card.normalrule>Look at the top 13 cards of your</x-card.normalrule>
            <x-card.normalrule>Library. You may put 3 of them into</x-card.normalrule>
            <x-card.normalrule>your hand. Put the rest on the bottom</x-card.normalrule> 
            <x-card.normalrule>of your Library in any order.</x-card.normalrule>
        </text></x-card.phaserule>
HTML
];
