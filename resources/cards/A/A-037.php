<?php

// inspiration: https://bulbapedia.bulbagarden.net/wiki/Canceling_Cologne_(Astral_Radiance_136)

return [
    'name' => 'Eau de Resistance',

    'concepts' => ['Upkeep', 'Item'],

    'image-prompt' => null,

    'image-credit' => 'Image by Freepik',

    'flavor-text' => [],
    'background' => <<<'HTML'
<image x="0" y="0" href="@local(fullsize/cologne.jpg)" />
HTML,

    'content' => <<<'HTML'
    <text y="670" filter="url(#solid)">
      <x-card.smallrule>Attach this card to a Monster on the Battlefield.</x-card.smallrule>
    </text>

<x-card.phaserule type="Command" lines="2">
    <text >
        <x-card.normalrule>For 1d4 turns, this Monster</x-card.normalrule>
            <x-card.normalrule>cannot be the target of an Attack.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML
];
