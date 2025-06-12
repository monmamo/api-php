<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Ramming')]
    #[Concept('Trait')]
    #[Concept('Physical')]
    #[Concept('Cost', 3)]
    #[ImageCredit('Image by Nilanjan Animesh')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/ramming.jpg</x-card.hero.local>

    <x-card.phaserule type="Resolution" lines="6"><text>
<x-card.ruleline class="smallrule">When this Monster uses Pounce or</x-card.ruleline>
<x-card.ruleline class="smallrule">Physical Attack on a Monster with</x-card.ruleline>
<x-card.ruleline class="smallrule">lower size, if the defending Monster takes</x-card.ruleline>
<x-card.ruleline class="smallrule">any damage, roll 1d6.</x-card.ruleline>
<x-card.ruleline class="smallrule">If @dieroll(4,5,6), it cannot attack on its next turn.</x-card.ruleline>
<x-card.ruleline class="smallrule">If @dieroll(6), also discard one Trait</x-card.ruleline>
<x-card.ruleline class="smallrule">card from the defending Monster.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
        }
    };
