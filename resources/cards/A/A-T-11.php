<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://www.freepik.com/free-photo/closeup-shot-beautiful-thompson-s-gazelle_10292458.htm

return new
    #[Title('Dual Cranial Horns')]
    #[Concept('Trait')]
    #[Concept('Physical')]
    #[Concept('Size', '+1')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Image by wirestock on Freepik')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>A064.jpg</x-card.hero.local> 

    <x-card.phaserule type="Attack" height="140">
        <text>
<x-card.skilltitle>Horn Attack</x-card.skilltitle>
<x-card.normalrule>Does 2×Speed @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
