<?php

return [
    'name' => 'Junkyard',

    'concepts' => ['Facility'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Facility.background'),
    'content' => <<<'HTML'
<x-card.cardrule height="150" >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule>When a rule or card text allows a player to search your Library,</x-card.normalrule>
<x-card.normalrule>you may search your Discard instead.</x-card.normalrule>
</x-card.cardrule>
HTML
];
