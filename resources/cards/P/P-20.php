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
<x-card.ruleline class="smallrule"></x-card.ruleline>
<x-card.ruleline>When a rule or card text allows a player to search your Library,</x-card.ruleline>
<x-card.ruleline>you may search your Discard instead.</x-card.ruleline>
</x-card.cardrule>
HTML
];
