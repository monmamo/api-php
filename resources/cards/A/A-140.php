<?php

// inspiration:: Giovanni's Last Resort PTCG card https://bulbapedia.bulbagarden.net/wiki/Giovanni%27s_Last_Resort_(Gym_Challenge_105)
return [
    'name' => 'Last Resort',

    'concepts' => ['Upkeep'],

    'image-prompt' => null,

    //'image-credit' => "Image by USER_NAME on SERVICE",

    'flavor-text' => ['Now is not the time to panic.'],
    'background' => \view('Upkeep.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.phaserule type="Upkeep" lines="3"><text>    
<x-card.normalrule>Discard your hand.</x-card.normalrule>
<x-card.normalrule>Then remove all Damage </x-card.normalrule>
    <x-card.normalrule>from one of your Monsters.</x-card.normalrule>
</text></x-card.phaserule>
HTML
];
