<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalBackgroundImage;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Flamboyant Mogul')]
#[\App\Concept('Vendor')]
#[\App\Concept('Male')]
#[\App\Concept('Integrity','1d4')]
#[\App\CardAttributes\IsGeneratedImage]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('He builds the hugest venues. Yuge ones.')]
#[LocalBackgroundImage('A-091-full.png')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
       yield <<<'HTML'
        <text y="130" filter="url(#solid)">
<x-card.normalrule>Discard five cards from your Hand</x-card.normalrule>
<x-card.normalrule>to play a Venue card from your Hand.</x-card.normalrule>
</text>
HTML;
    }
};
