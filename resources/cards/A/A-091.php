<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
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
//#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('He builds the hugest venues. Yuge ones.')]
#[LocalBackgroundImage('A-091-full.png')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <text y="130" filter="url(#solid)">
<x-card.normalrule>Discard 5 cards from your Hand</x-card.normalrule>
<x-card.normalrule>to search your Library for a Venue card and play it immediately.</x-card.normalrule>
</text>
HTML;
    }
};
