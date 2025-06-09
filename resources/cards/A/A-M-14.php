<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Whiskers')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 44)]
    #[Concept('DamageCapacity', 16)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', '2')]
    #[Concept('Cost', 8)]
    #[ImageCredit('Image by Nilanjan Animesh')]
        #[ImagePrompt('lavender cat monster of weird zoology by a lake')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/whiskers.jpg</x-card.hero.local>

    <x-card.taxons>Regos, Felos</x-card.taxons>


<x-card.phaserule type="Resolution" >
    <text>
<x-card.ruleline class="skilltitle">Mind Control</x-card.ruleline>
<x-card.ruleline>If attacked, roll 1d6.</x-card.ruleline>
<x-card.ruleline>@dieroll(6) The attack has no effect.</x-card.ruleline>
</text>
</x-card.phaserule>

HTML;
        }
    };
