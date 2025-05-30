<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalBackgroundImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Flamboyant Mogul')]
#[Concept('Vendor')]
#[Concept('Male')]
#[Concept('Integrity', '1d4')]
#[IsGeneratedImage]
#[ImageIsPrototype]
#[LocalBackgroundImage('A-091-full.png')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>He builds the hugest venues. Yuge ones.</x-card.flavortext>

<x-card.cardrule lines="4">
  <x-card.normalrule>Discard 5 cards from your Hand</x-card.normalrule>
<x-card.normalrule>to search your Library for a</x-card.normalrule>
<x-card.normalrule>Venue card and play it immediately.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</x-card.cardrule>
HTML;
    }
};
