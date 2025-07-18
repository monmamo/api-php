<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Bluefairy')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 30)]
    #[Concept('DamageCapacity', 14)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 5)]
    #[Concept('Boost', '2')]
    #[Concept('Cost', 6)]
    #[ImageCredit('Image by Merry Shuporna Biswas')]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-17.jpg</x-card.hero.local>

    <x-card.taxons>Carmos</x-card.taxons>

<x-card.phaserule type="Skill" >
    <text>
<x-card.ruleline class="skilltitle">Irresistible Cuteness</x-card.ruleline>
<x-card.ruleline>Master, Mobster and Bystander</x-card.ruleline>
<x-card.ruleline>cards have no effect.</x-card.ruleline>
        </text>
</x-card.phaserule>
HTML;
        }
    };
