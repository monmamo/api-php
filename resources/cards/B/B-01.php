<?php
return [
'name' => "Fabric Allergy",

'concepts' => ["Bane"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => view('Bane.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

        <x-card.phaserule type="Resolution" y="135" height="100">
            <text >
                <x-card.normalrule>If this Monster is wearing a Garment, it takes 1d4 damage.</x-card.normalrule>
            </text>
        </x-card.phaserule>

HTML
];


