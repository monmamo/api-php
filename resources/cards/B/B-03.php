<?php
return [
'name' => "Hyperhidrosis",

'concepts' => ["Bane"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => ["Excessive sweating."],
'background' => view('Bane.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

<x-card.phaserule type="Resolution" height="135">
    <text >
TODO
    </text>
</x-card.phaserule>
HTML
];
