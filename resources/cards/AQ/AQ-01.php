<?php
#[\App\CardAttributes\Prerequisites(lines:['Requires Aquos.','Can be used only at an Ocean.'],y:460)]
return [
    'name' => 'Cresting Wave',

    'concepts' => ['Attack'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Attack.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.normalrule>Summons a large wave, carrying the force of the ocean to sweep away opponents.</x-card.normalrule>
</x-card.cardrule>
HTML
];
