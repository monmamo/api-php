<?php

return [
    'name' => 'Scrubland',

    'concepts' => ['Place', 'Generic'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Place.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="95" >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule></x-card.normalrule>
</x-card.cardrule>
HTML
];
