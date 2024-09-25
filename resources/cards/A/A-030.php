<?php

return [
    'name' => 'Ramming',

    'concepts' => ['Trait', 'Physical'],
    'ai' => true,
    'image-prompt' => null,

    'image-credit' => null,

    'flavor-text' => [],
    'background' => \view('Trait.background'),
    'content' => <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(AT32.png)" />

    <x-card.phaserule type="Resolution" lines="6"><text>
<x-card.normalrule>When this Monster uses Pounce or </x-card.normalrule>
<x-card.normalrule>Physical Attack, if the defending Monster</x-card.normalrule>
<x-card.normalrule>takes any damage, roll 1d6. </x-card.normalrule>
<x-card.normalrule>If @dieroll(4,5,6), it cannot attack on the next turn. </x-card.normalrule>
<x-card.normalrule>If @dieroll(6), also discard one Trait</x-card.normalrule>
<x-card.normalrule>card from the defending Monster.</x-card.normalrule>       
</text></x-card.phaserule>
HTML
];
