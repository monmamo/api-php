<?php

return [
    'name' => 'Temporary Blindness',

    'concepts' => ['Bane', 'Physical'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Bane.background'),
    'content' => <<<'HTML'

<text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        <x-card.smallrule>You may play this card only with an Attack.</x-card.smallrule>
        </text >

        <x-card.phaserule type="Resolution" height="135">
            <text >
<x-card.normalrule>TODO</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
