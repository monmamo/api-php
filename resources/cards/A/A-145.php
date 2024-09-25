<?php

return [
    'name' => 'First Aid Kit',

    'concepts' => ['Vendor'],

    'image-prompt' => null,

    'image-credit' => 'Image by USER_NAME on SERVICE',

    'flavor-text' => [],
    'background' => \view('Vendor.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/first-aid-kit.jpg)"  />
<x-card.phaserule type="Draw" height="165"><text>
<x-card.normalrule>Search your Library or Discard </x-card.normalrule>
<x-card.normalrule>for a Healing Item card.</x-card.normalrule>
<x-card.normalrule>Put the card you find in your hand.</x-card.normalrule>
<x-card.smallrule>If you searched your Library, shuffle it.</x-card.smallrule>
</text></x-card.phaserule>

HTML
];
