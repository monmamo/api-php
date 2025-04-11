<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Pyrohystrix L45')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 20)]
    #[Concept('Level', 45)]
    #[Concept('Size', 6)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '4')]
    #[ImagePrompt('firey porcupine of weird zoology')]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-12.png</x-card.hero.local>

    <x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Pyros, Hystricos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="175"><text>
<x-card.skilltitle>Hot Quills</x-card.skilltitle>
<x-card.normalrule>Does 3d6 @damage.</x-card.normalrule>
        </text></x-card.phaserule>

HTML;
        }
    };
