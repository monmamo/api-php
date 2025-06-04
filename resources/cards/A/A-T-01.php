<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// <x-card.cardrule y="495"  :>
// <x-card.smallrule :source="\App\Concept::make('Trait')->standardRule()" />
// </x-card.cardrule>

return new
    #[Title('Biting')]
    #[Concept('Trait')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.hero.local>hero/A-T-01.jpg</x-card.hero.local>

<x-card.flavortext>What sharp teeth you have.</x-card.flavortext>

<x-card.phaserule type="Attack" height="140"><text>
<x-card.skilltitle>Bite</x-card.skilltitle>
<x-card.normalrule>Does 3×Speed @damage.</x-card.normalrule>
        </text></x-card.phaserule>

HTML;
        }
    };
