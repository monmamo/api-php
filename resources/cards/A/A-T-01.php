<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
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
    #[Concept('Cost', 3)]
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImageCredit(null)]
    #[FlavorText('What sharp teeth you have.')]
    #[Prerequisites(y: 490)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A006.png</x-card.hero.local>

    <x-card.phaserule type="Attack" height="140"><text>
<x-card.skilltitle>Bite</x-card.skilltitle>
<x-card.normalrule>Does 3×Speed @damage.</x-card.normalrule>
        </text></x-card.phaserule>

HTML;
        }
    };
