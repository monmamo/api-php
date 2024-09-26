<?php
// inspiration: Hooligans Jim and Cas PTCG card https://bulbapedia.bulbagarden.net/wiki/Hooligans_Jim_%26_Cas_(Dark_Explorers_95) 
return [
    'name' => 'Enforcer',

    'concepts' => ['Mobster', 'Male', 'Integrity:1d4'],
    'ai' => true,
    'image-prompt' => null,

    'image-credit' => null,

    'flavor-text' => null,
    'background' => \view('Mobster.background'),
    'prerequisites' => ['Limit 1 per player on the Battlefield.'],
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(A072.png)"  />
<x-card.phaserule type="Upkeep" lines="5">
    <text >
<x-card.normalrule>You may choose a random card</x-card.normalrule>
<x-card.normalrule>from an opponent's hand. The opponent </x-card.normalrule>
<x-card.normalrule>must reveal that card to all players.</x-card.normalrule>
<x-card.normalrule>You may have that player discard that card</x-card.normalrule>
<x-card.normalrule>or shuffle it back into their Library.        </x-card.normalrule>
</text>
</x-card.phaserule>

HTML
];
