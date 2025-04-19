<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
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
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImagePrompt('blue selkie of weird zoology swimming in a lake, trees and mountains in the background')]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-19.jpeg</x-card.hero.local>

    <x-card.taxons>Aquos, Selkos</x-card.taxons>

<x-card.phaserule type="Trait" height="210">
    <text>
<x-card.skilltitle>Smooth Skin</x-card.skilltitle>
<x-card.normalrule>Physical Defense prevents +2d6 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
