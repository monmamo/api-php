<?php
return [
'name' => "Law Enforcement Raid",

'concepts' => ["Catastrophe"],

'image-prompt' => null,

//'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => view('Catastrophe.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="130" >
<x-card.normalrule>Exile all Mobster cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Any further Mobster cards that</x-card.normalrule>
<x-card.normalrule>are revealed go immediately to Exile.</x-card.normalrule>
</x-card.cardrule>
HTML
];