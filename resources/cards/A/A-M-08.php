<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Cuddles')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 45)]
    #[Concept('DamageCapacity', 20)]
    #[Concept('Size', 6)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', 3)]
    #[Concept('Cost', 9)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
            <x-card.hero.local>hero/A-M-08.jpg</x-card.hero.local>

            <x-card.taxons>Energos, Lupos</x-card.taxons>


<x-card.phaserule type="Skill" >
<text>
<x-card.ruleline class="skilltitle">Beast Mode</x-card.ruleline>
<x-card.ruleline>Size +1 for each Electricity (A-003)</x-card.ruleline>
<x-card.ruleline>attached to this Monster.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
