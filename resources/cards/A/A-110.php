<?php

return [
    'name' => 'Personal Shopper',

    'concepts' => ['Vendor', 'Integrity:1d4'],
    'ai' => true,
    'image-prompt' => null,

    'image-credit' => null,

    'flavor-text' => [],
    'background' => \view('Vendor.background'),
    'content' => <<<'HTML'
  <image class="hero" href="@local(hero/personal-shopper.jpg)" />

  <x-card.phaserule type="Draw"  height="170">
      <text >    
<x-card.normalrule>Search your deck for 1-3 Item cards.</x-card.normalrule>
<x-card.normalrule>Show them to your opponent(s),</x-card.normalrule>
<x-card.normalrule>and put them into your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle your deck afterward.</x-card.normalrule>
</text></x-card.phaserule> 
HTML
];
