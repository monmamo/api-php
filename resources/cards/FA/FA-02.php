<?php
return [
'name' => "Apothecary",

'concepts' => ["Vendor","Integrity"],

'image-prompt' => null,

'image-credit' => "Image by USER_NAME on SERVICE",

'flavor-text' => [],
'background' => view('Vendor.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />
<x-card.cardrule height="0" >
<x-card.normalrule>Search your Library for 1 Healing card. </x-card.normalrule>
<x-card.normalrule>Reveal the card, then put it in your hand. </x-card.normalrule>
<x-card.normalrule>Shuffle your Library afterwards.</x-card.normalrule>
</x-card.cardrule>
HTML
];
