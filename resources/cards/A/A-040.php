<?php

return [
    'name' => 'Hardware Store',

    'concepts' => ['Vendor'],

    'image-prompt' => null,

    'image-credit' => 'Image by studio4rt on Freepik',
    'image-source' => 'https://www.freepik.com/free-vector/tools-shop-showcase-assortment-painting-building-home-repair-renovation-carpentry-work-constructor-hardware-store-stand-with-housekeeping-equipment_25872060.htm',
    'flavor-text' => [],
    'background' => \view('Vendor.background'),
    'content' => <<<'HTML'
<image x="0" y="0" class="hero" href="@local(hero/hardware-store.jpg)"  />
<x-card.phaserule type="Draw" lines="5">
    <text>
  <x-card.normalrule>Discard any number of cards from </x-card.normalrule>
  <x-card.normalrule>your hand. For each card that you discarded, </x-card.normalrule>
  <x-card.normalrule>search your Library for a Durable Item card. </x-card.normalrule>
  <x-card.normalrule>Reveal it, then put it in your hand. </x-card.normalrule>
  <x-card.normalrule>Shuffle your library.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];
