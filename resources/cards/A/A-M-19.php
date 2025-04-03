<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Silky Selkie')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 23)]
    #[Concept('Level', 45)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 4)]
    #[Concept('Boost', '4')]
    #[LocalHeroImage('hero/A-M-19.jpeg')]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImagePrompt('blue selkie of weird zoology swimming in a lake, trees and mountains in the background')]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Aquos, Selkos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Trait" height="210">
    <text>
<x-card.skilltitle>Smooth Skin</x-card.skilltitle>
<x-card.normalrule>Physical Defense prevents +2d6 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
