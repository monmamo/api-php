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

<x-card.cardrule >
<x-card.ruleline>Reveal the top 7 cards of your Library.</x-card.ruleline>
<x-card.ruleline>You may put any Item cards in your hand.</x-card.ruleline>
<x-card.ruleline>Discard the rest.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
      }
  };
