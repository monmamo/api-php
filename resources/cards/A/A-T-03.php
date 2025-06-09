<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Berserk')]
    #[Concept('Trait')]
    #[Concept('Speed', '+?')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Image by Nilanjan Animesh')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield '<x-card.hero.local>hero/A-T-03.jpg</x-card.hero.local>';

            yield '<x-card.flavortext>You won\'t like him when he\'s angry.</x-card.flavortext>';

            yield <<<'HTML'
<x-card.phaserule type="Resolution" ><text>
            <x-card.ruleline>Increase Speed by 1</x-card.ruleline>
            <x-card.ruleline>for each 4 @damage taken.</x-card.ruleline>
        </text></x-card.phaserule>
HTML;
        }
    };
