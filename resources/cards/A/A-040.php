<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Hardware Store')]
    #[Concept('Vendor')]
    #[ImageCredit('Image by studio4rt on Freepik')] // https://www.freepik.com/free-vector/tools-shop-showcase-assortment-painting-building-home-repair-renovation-carpentry-work-constructor-hardware-store-stand-with-housekeeping-equipment_25872060.htm
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>hero/hardware-store.jpg</x-card.hero.local>
            
<x-card.flavortext>Trailer hitch demagnetizers, automatic circumcisers...</x-card.flavortext>

<x-card.phaserule type="Draw" >
    <text>
  <x-card.ruleline>Discard any number of cards from</x-card.ruleline>
  <x-card.ruleline>your hand. For each card that you</x-card.ruleline>
  <x-card.ruleline>discarded, search your Library for a</x-card.ruleline>
  <x-card.ruleline>Durable Item card. Reveal it, then put</x-card.ruleline>
  <x-card.ruleline>it in your hand. Shuffle your library.</x-card.ruleline>
  <x-card.ruleline class="smallrule" :source="\App\Concept::make('Vendor')->standardRule()" />
  </text>
</x-card.phaserule>
HTML;
        }
    };
