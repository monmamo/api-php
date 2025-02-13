<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Ramming')]
    #[Concept('Trait')]
    #[Concept('Physical')]
    #[IsGeneratedImage]
    #[LocalHeroImage('AT32.png')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.phaserule type="Resolution" lines="6"><text>
<x-card.normalrule>When this Monster uses Pounce or</x-card.normalrule>
<x-card.normalrule>Physical Attack, if the defending</x-card.normalrule>
<x-card.normalrule>Monster takes any damage, roll 1d6.</x-card.normalrule>
<x-card.normalrule>If @dieroll(4,5,6), it cannot attack on the next turn.</x-card.normalrule>
<x-card.normalrule>If @dieroll(6), also discard one Trait</x-card.normalrule>
<x-card.normalrule>card from the defending Monster.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
        }
    };
