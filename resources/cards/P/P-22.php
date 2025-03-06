<?php

// inspiration: Training Center PTCG card https://bulbapedia.bulbagarden.net/wiki/Training_Center_(Furious_Fists_102)
return [
    'name' => 'Training Center',

    'concepts' => ['Environment'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [''],
    'background' => \view('Environment.background'),
    'content' => <<<'HTML'
<x-card.cardrule height="95" >
<x-card.smallrule></x-card.smallrule>
<x-card.normalrule>Resolution phase: For each Attack where the Defense does not prevent all damage, add 3 @damage.</x-card.normalrule>
</x-card.cardrule>
HTML
];
