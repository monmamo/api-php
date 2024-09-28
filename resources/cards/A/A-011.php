<?php

return [
    'name' => 'Flash of Lightning',

    'image-prompt' => null,

    'concepts' => ['Skill'],
    'background' =>  view('Skill.background'),

    'content' => <<<'HTML'
    <g class="svg-hero"><?= view('Energos.icon') ?></g>

    <text y="500" filter="url(#solid)">
    <x-card.smallrule>Requires Energos.</x-card.smallrule>
</text>

<x-card.phaserule type="Resolution" lines="6"><text>
<x-card.normalrule>Discard all Electricity cards attached</x-card.normalrule>
    <x-card.normalrule>to this Monster. Each other Monster on</x-card.normalrule>
    <x-card.normalrule>the Battlefield takes 1d6 damage for each</x-card.normalrule>
    <x-card.normalrule>Electricity card discarded. Only this </x-card.normalrule>
    <x-card.normalrule>Monster may attack until & through</x-card.normalrule>
    <x-card.normalrule>this player’s next turn.</x-card.normalrule>
    </text></x-card.phaserule>
HTML
];
