<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cheerleader')]
#[Concept('Bystander')]
#[Concept('Female')]
#[Concept('Cumulative')]
#[Concept('Integrity', '2')]
#[LocalHeroImage('A032.jpg')] // https://www.freepik.com/free-vector/hand-drawn-cheerleader-cartoon-illustration_74884680.htm#fromView=image_search_similar&page=1&position=0&uuid=c5c5f2c3-37ff-4227-956f-33c0b507b00c
#[ImageCredit('Image by freepik')]
#[FlavorText('Go, go, go team go!')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<text y="500" filter="url(#solid)">
    <x-card.smallrule>A player may have any number of Cheerleaders on the Battlefield.</x-card.smallrule>
    <x-card.smallrule>You may choose to make this card Male</x-card.smallrule>
    <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
</text>

    <x-card.phaserule type="Resolution" height="100">
        <text >
    <x-card.normalrule>Your Monster’s Attacks</x-card.normalrule>
        <x-card.normalrule>do an additional 1d4 damage.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
