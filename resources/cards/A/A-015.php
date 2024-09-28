<?php

return [
    'name' => 'Berserk',

    'image-prompt' => null,

    'concepts' => ['Trait'],
    'background' =>  view('Trait.background'),


    'content' => <<<'HTML'
<x-card.phaserule type="Resolution" lines="2"><text>
            <x-card.normalrule>Speed +2 when </x-card.normalrule>
            <x-card.normalrule>remaining HP drops below half.</x-card.normalrule>
        </text></x-card.phaserule>
HTML
];
