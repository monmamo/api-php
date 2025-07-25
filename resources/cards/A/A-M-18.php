<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Spike')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('Level', 40)]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', 3)]
    #[Concept('Cost', 8)]
    #[ImageCredit('Image by Nilanjan Animesh')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/Spike.jpg</x-card.hero.local>

    <x-card.taxons>Aquos, Hystricos</x-card.taxons>

<x-card.phaserule type="Attack" >
    <text>
<x-card.ruleline class="skilltitle">Ball of Pain</x-card.ruleline>
<x-card.ruleline>Does Speed+3d6 @damage.</x-card.ruleline>
</text>
</x-card.phaserule>

HTML;
        }
    };
