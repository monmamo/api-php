<?php

return [
    'name' => 'Berserk',
    'concepts' => [
        'Trait',
    ],

    'image-prompt' => null,

    'background' => <<<'HTML'
{{ view('Trait.background') }}
HTML,

    'content' => <<<'HTML'
<x-card.concept.staticon type="Trait" />

        <text y="500" filter="url(#solid)">
        
</text>

<x-card.phaserule type="Resolution" lines="2"><text>
            <x-card.normalrule>Speed +2 when </x-card.normalrule>
            <x-card.normalrule>remaining HP drops below half.</x-card.normalrule>
        </text></x-card.phaserule>
HTML
];
