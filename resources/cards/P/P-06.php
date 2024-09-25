<?php
return [
'name' => "Duststorm",

'concepts' => ["Environment","Weather"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => view('Environment.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="0" >
<x-card.normalrule>All players put their hands face down when this card is played.</x-card.normalrule>
<x-card.normalrule>While this card is in play, all hands remain facedown unless a rule of this card allows the player to view them. Any cards drawn during this phase must be placed facedown.</x-card.normalrule>
<x-card.normalrule>Upkeep phase: You may pick up 1d6 cards.</x-card.normalrule>
<x-card.normalrule>Resolution phase: You must put all but 1d4 cards face down.</x-card.normalrule>
</x-card.cardrule>
HTML
];
