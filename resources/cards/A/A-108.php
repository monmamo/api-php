<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
  #[Title('Grab Bag')]
  #[Concept('Draw')]
  #[ImageCredit('Shutterstock #2348597925')]
  class(__FILE__) implements CardComponents
  {
      use DefaultCardAttributes;

      public function content(): \Traversable
      {
          yield <<<'HTML'
          <x-card.hero.local>A108.jpg</x-card.hero.local>

  <x-card.cardrule lines="4">
  <x-card.normalrule>Reveal the top 7 cards of your Library.</x-card.normalrule>
<x-card.normalrule>You may put any Item cards in your hand.</x-card.normalrule>
<x-card.normalrule>Discard the rest.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
      }
  };
