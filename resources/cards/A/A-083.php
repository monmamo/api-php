<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Farmer\'s Refuse')]
#[Concept('Draw')]
// #[ImageCredit('IMAGE_CREDIT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
  <x-card.cardrule >
  <x-card.ruleline>Discard any number of cards from your hand.</x-card.ruleline>
    <x-card.ruleline>For each card discarded, search your Discard</x-card.ruleline>
    <x-card.ruleline>for a Monster or Mana card. Reveal</x-card.ruleline>
    <x-card.ruleline>those cards, then put them in your hand.</x-card.ruleline>
    <x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
    </x-card.cardrule>
HTML;
    }
};
