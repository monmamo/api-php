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
    #[ImageInDevelopment]
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
<x-card.normalrule>When this Monster uses Pounce or</x-card.normalrule>
<x-card.normalrule>Physical Attack on a Monster with</x-card.normalrule>
<x-card.normalrule>lower size, if the defending Monster takes</x-card.normalrule>
<x-card.normalrule>any damage, roll 1d6.</x-card.normalrule>
<x-card.normalrule>If @dieroll(4,5,6), it cannot attack on its next turn.</x-card.normalrule>
<x-card.normalrule>If @dieroll(6), also discard one Trait</x-card.normalrule>
<x-card.normalrule>card from the defending Monster.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
