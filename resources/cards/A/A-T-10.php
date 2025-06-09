<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageInDevelopment;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Ramming')]
    #[Concept('Trait')]
    #[Concept('Physical')]
    #[Concept('Cost', 3)]
    #[ImageInDevelopment] // Merry
    #[IsGeneratedImage]
    #[ImageIsPrototype]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>AT32.png</x-card.hero.local>

    <x-card.phaserule type="Resolution" lines="7"><text>
<x-card.ruleline>When this Monster uses Pounce or</x-card.ruleline>
<x-card.ruleline>Physical Attack on a Monster with</x-card.ruleline>
<x-card.ruleline>lower size, if the defending Monster takes</x-card.ruleline>
<x-card.ruleline>any damage, roll 1d6.</x-card.ruleline>
<x-card.ruleline>If @dieroll(4,5,6), it cannot attack on its next turn.</x-card.ruleline>
<x-card.ruleline>If @dieroll(6), also discard one Trait</x-card.ruleline>
<x-card.ruleline>card from the defending Monster.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
        }
    };
