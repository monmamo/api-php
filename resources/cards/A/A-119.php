<?php
return [
'name' => "Healing Elixir",

'concepts' => ["Item","Healing"],

'image-prompt' => null,
'image-source' => 'https://www.freepik.com/free-photo/brain-booster-pills-container-still-life_65114716.htm',
'image-credit' => "Image by freepik",

'flavor-text' => ["Does a monster good!"],
'background' => view('Item.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(A119.jpg)"  />
<x-card.phaserule type="Upkeep"  lines="3"><text >    
<x-card.normalrule>Discard any number of cards from</x-card.normalrule>
<x-card.normalrule>your hand. For each card you discarded, </x-card.normalrule>
<x-card.normalrule>remove 5 damage from one Monster.</x-card.normalrule>
</text></x-card.phaserule> 
HTML
];