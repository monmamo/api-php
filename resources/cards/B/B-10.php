<?php
return [
'name' => "Hailstorm",

'concepts' => ["Catastrophe"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => view('Catastrophe.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<text y="500" filter="url(#solid)">
    <x-card.smallrule>This card can be played only if Spring or Autumn is in play.</x-card.smallrule>
<x-card.normalrule>Discard all Mobster and Bystander cards in play.</x-card.normalrule>
<x-card.normalrule>Discard all Item cards in play.</x-card.normalrule>
</text>
HTML
];
