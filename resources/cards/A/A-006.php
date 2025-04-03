<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// <x-card.cardrule y="495"  :lines="3">
// <x-card.smallrule :source="\App\Concept::make('Trait')->standardRule()" />
// </x-card.cardrule>


return new
    #[Title('Biting')]
    #[Concept('Trait')]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImageCredit(null)]
    #[FlavorText('What sharp teeth you have.')]
    #[LocalHeroImage('A006.png')]
    #[Prerequisites(y: 490)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Attack" height="140"><text>
<x-card.skilltitle>Bite</x-card.skilltitle>
<x-card.normalrule>Does 3×Speed @damage.</x-card.normalrule>
        </text></x-card.phaserule>

HTML;
        }
    };
