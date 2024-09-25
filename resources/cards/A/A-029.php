<?php

return [
    'name' => 'Oozing Effluvia',

    'concepts' => ['Trait'],

    'image-prompt' => null,

    'image-credit' => null,

    'flavor-text' => [],

    'background' => \view('Trait.background'),

    'content' => <<<'HTML'
        <x-card.phaserule type="Resolution" lines="2"><text>
        <x-card.normalrule>Dodge prevents Size damage</x-card.normalrule> 
        <x-card.normalrule>instead of Speed.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
