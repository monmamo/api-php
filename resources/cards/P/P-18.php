<?php

return [
    'name' => 'Sewage Treatment Plant',

    'concepts' => ['Facility'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Facility.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="95" >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule>Resolution phase: Reduce the base value of all Attacks by half.</x-card.normalrule>
</x-card.cardrule>
HTML
];
