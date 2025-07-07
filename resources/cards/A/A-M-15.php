<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Good Boy')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 38)]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', '3')]
    #[Concept('Cost', 7)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/GoodBoy.jpg</x-card.hero.local>

    <x-card.taxons>Canos</x-card.taxons>


<x-card.phaserule type="Resolution" >
<text>
<x-card.ruleline class="skilltitle">Resilience</x-card.ruleline>
<x-card.ruleline>After applying attacks and defenses,</x-card.ruleline>
<x-card.ruleline>If subject to a Bane, roll 1d6.</x-card.ruleline>
<x-card.ruleline>@dieroll(6,5,4) The Bane has no effect. If the</x-card.ruleline>
<x-card.ruleline>Bane is attached, discard it.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
