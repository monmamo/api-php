<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Farmer\'s Market')]
#[Concept('Vendor')]
#[Concept('Integrity', '1d4')]
#[IsGeneratedImage]
#[ImageIsPrototype]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
  <image x="0" y="0" class="hero" href="@local(A082.png)" />

  <x-card.phaserule type="Draw" lines="6"><text>
<x-card.ruleline>Discard any number of cards from your hand.</x-card.ruleline>
<x-card.ruleline>For each card discarded, search your Library</x-card.ruleline>
<x-card.ruleline>for a Monster or Mana card. Reveal those</x-card.ruleline>
<x-card.ruleline>cards, then put them in your hand.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
