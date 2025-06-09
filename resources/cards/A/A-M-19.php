<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Silky')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 45)]
    #[Concept('DamageCapacity', 23)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 4)]
    #[Concept('Boost', '4')]
    #[Concept('Cost', 9)]
    #[ImageCredit('Image by Nilanjan Animesh')]
    #[ImagePrompt('blue selkie of weird zoology swimming in a lake, trees and mountains in the background')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/Silky.jpg</x-card.hero.local>

    <x-card.taxons>Aquos, Selkos</x-card.taxons>

<x-card.phaserule type="Trait" >
    <text>
<x-card.ruleline class="skilltitle">Smooth Skin</x-card.ruleline>
<x-card.ruleline>Physical Defense prevents +2d6 @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
