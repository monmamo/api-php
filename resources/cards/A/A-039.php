<?php

return [
    'name' => 'Absorb Water',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'prerequisites' => ['Requires Aquos.'],

    'flavor-text' => [],
    'background' => \view('Trait.background'),

    'content' => <<<'HTML'
<g class="svg-hero"><?= view('Aquos.icon') ?></g>

<x-card.phaserule type="Resolution" height="175">
    <text >
<x-card.normalrule>If hit by an Attack that results in </x-card.normalrule>
<x-card.normalrule>the attacker discarding Water, </x-card.normalrule>
<x-card.normalrule>attach those cards to this Monster.</x-card.normalrule>
<x-card.smallrule>When those cards are discarded, they go </x-card.smallrule>
<x-card.smallrule>to the Discard of the player who owns them.</x-card.smallrule>
    </text>
</x-card.phaserule>
HTML
];
