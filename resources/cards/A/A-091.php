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

<x-card.phaserule type="Draw" lines="6"><text>
  <x-card.ruleline>Discard 5 cards from your Hand</x-card.ruleline>
<x-card.ruleline>to search your Library for a</x-card.ruleline>
<x-card.ruleline>Venue card and play it immediately.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
