<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Grumpus')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 41)]
    #[Concept('DamageCapacity', 22)]
    #[Concept('Size', 6)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', '3')]
    #[Concept('Cost', 8)]
    #[ImageCredit('Image by Nilanjan Animesh')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/Grumpus.jpg</x-card.hero.local>

    <x-card.taxons>Hominos</x-card.taxons>

<x-card.phaserule type="Trait" >
    <text>
<x-card.ruleline class="skilltitle">Needs a Friend</x-card.ruleline>
<x-card.ruleline>Increase Speed by 1 for</x-card.ruleline>
<x-card.ruleline>each Bystander on your team.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
