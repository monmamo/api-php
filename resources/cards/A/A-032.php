<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageInDevelopment;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/hand-drawn-cheerleader-cartoon-illustration_74884680.htm#fromView=image_search_similar&page=1&position=0&uuid=c5c5f2c3-37ff-4227-956f-33c0b507b00c

return new
    #[Title('Cheerleader')]
    #[Concept('Bystander')]
    #[Concept('Female')]
    #[Concept('Cumulative')]
    #[Concept('Integrity', '2')]
    #[ImageCredit('Image by freepik')]
    #[Concept('DamageCapacity', 10)]
    #[Concept('Size', 3)]
    #[Concept('Speed', 5)]
    #[\App\CardAttributes\ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>hero/Cheerleader.jpg</x-card.hero.local>

<x-card.flavortext>Go, go, go team go!</x-card.flavortext>

<x-card.phaserule type="Resolution" >
    <text >
    <x-card.ruleline class="smallrule">A player may have any number of Cheerleaders</x-card.ruleline>
    <x-card.ruleline class="smallrule">on the Battlefield. You may choose to make this</x-card.ruleline>
    <x-card.ruleline class="smallrule">card Male when you put it on the Battlefield.</x-card.ruleline>
    <x-card.ruleline>Your Monster Attacks do +1 @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
