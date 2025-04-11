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

  <x-card.cardrule lines="5">
<x-card.normalrule>Discard any number of cards from your hand.</x-card.normalrule>
<x-card.normalrule>For each card discarded, search your Library</x-card.normalrule>
<x-card.normalrule>for a Monster or Mana card. Reveal those</x-card.normalrule>
<x-card.normalrule>cards, then put them in your hand.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</x-card.cardrule>
HTML;
    }
};
