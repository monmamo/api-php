<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;
use App\CardAttributes\LocalHeroImage;

return new
    #[Title('Berserk')]
    #[Concept('Trait')]
    #[LocalHeroImage('TODO.png')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2"><text>
            <x-card.normalrule>Increase speed by 1 </x-card.normalrule>
            <x-card.normalrule>for each 10 points of damage taken.</x-card.normalrule>
        </text></x-card.phaserule>
HTML;
        }
    };
