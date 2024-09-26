<?php

// https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2F4vvvGVlDFF.png?alt=media&token=6dddeb26-525f-4803-9565-1dc5086089cf
return [
    'name' => 'Pyros Monster L40',

    'concepts' => ['Monster', 'Female', 'DamageCapacity:70', 'Level:40', 'Size:20', 'Speed:10', 'Multiplier:x3'],

    'image-prompt' => null,
    'ai' => true,
    'image-credit' => null,

    'background' => \view('Monster.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(TODO.png)" />
<x-card.cardrule height="55" >
<x-card.normalrule>Taxons: Pyros, TODO</x-card.normalrule>
</x-card.cardrule>
HTML
];
