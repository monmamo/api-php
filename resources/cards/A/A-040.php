<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Hardware Store')]
    #[Concept('Vendor')]
    #[ImageCredit('Image by studio4rt on Freepik')] // https://www.freepik.com/free-vector/tools-shop-showcase-assortment-painting-building-home-repair-renovation-carpentry-work-constructor-hardware-store-stand-with-housekeeping-equipment_25872060.htm
    #[Prerequisites(y: 455)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>hero/hardware-store.jpg</x-card.hero.local>
            
<x-card.phaserule type="Draw" lines="6">
    <text>
  <x-card.normalrule>Discard any number of cards from</x-card.normalrule>
  <x-card.normalrule>your hand. For each card that you</x-card.normalrule>
  <x-card.normalrule>discarded, search your Library for a</x-card.normalrule>
  <x-card.normalrule>Durable Item card. Reveal it, then put</x-card.normalrule>
  <x-card.normalrule>it in your hand. Shuffle your library.</x-card.normalrule>
  <x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
  </text>
</x-card.phaserule>
HTML;
        }
    };
