<?php

return [
    'name' => 'Cresting Wave',

    'concepts' => ['Attack'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Attack.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="25" >
<x-card.smallrule>Requires Aquos.</x-card.smallrule>
<x-card.normalrule>Can be used only at an Ocean.</x-card.normalrule>
<x-card.normalrule>Summons a large wave, carrying the force of the ocean to sweep away opponents.</x-card.normalrule>
</x-card.cardrule>
HTML
];
