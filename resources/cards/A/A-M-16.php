<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Greybeast')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 42)]
    #[Concept('DamageCapacity', 22)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '3')]
    #[Concept('Cost', 8)]
    #[ImageCredit('Image by Nilanjan Animesh')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/Greybeast.jpg</x-card.hero.local>

    <x-card.taxons>Gouros</x-card.taxons>

<x-card.phaserule type="Resolution" >
    <text>
<x-card.ruleline class="skilltitle">Nightmare Fuel</x-card.ruleline>
<x-card.ruleline>Every Monster that does not use an</x-card.ruleline>
<x-card.ruleline>Attack, Defense or Skill during the turn</x-card.ruleline>
<x-card.ruleline>loses 3 @damage.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
