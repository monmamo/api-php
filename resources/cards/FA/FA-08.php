<?php
return [
'name' => "healing Herb",

'concepts' => ["Upkeep","Item","Healing"],

'image-prompt' =>  "A potion bottle with a green liquid inside.",

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => ["The best medicine is the one that tastes the worst."],
'background' => view('Upkeep.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(FA-08.png)"  />
<x-card.cardrule height="0" >
<x-card.normalrule>Attach this card to a Monster. After all attacks have been resolved (even if the Monster has been knocked out), roll 3d6. Remove that amount of damage from that Monster. If two or three of the rolls are 5 or higher, remove all Banes from that Monster.</x-card.normalrule>
</x-card.cardrule>
HTML
];
