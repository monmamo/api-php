<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-vector/time-is-money-background_1014317.htm

return new
    #[Title('Investment')]
    #[Concept('Draw')]
    #[ImageCredit('Image by photoroyalty on Freepik')]
    #[FlavorText('Past performance is not indicative of future results.')]
    #[LocalHeroImage('A135.jpg')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.cardrule  lines="2">
            <x-card.normalrule>Put any number of cards </x-card.normalrule>
                <x-card.normalrule>facedown on the Battlefield.</x-card.normalrule>
    </x-card.cardrule>
HTML;
        }
    };
