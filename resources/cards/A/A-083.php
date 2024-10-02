<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Farmer\'s Refuse')]
#[Concepts('Draw')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="100" filter="url(#solid)">
    <x-card.normalrule>Discard any number of cards from your hand.</x-card.normalrule>
    <x-card.normalrule>For each card discarded, search your Discard </x-card.normalrule>
    <x-card.normalrule>for a Monster or Mana card.</x-card.normalrule>
    <x-card.normalrule>Reveal those cards, then put them in your hand.</x-card.normalrule>
    </text>
HTML;
}
};
