<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Zapcat')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('Level', 40)]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', 3)]
    #[Concept('Cost', 8)]
    #[ImagePrompt('yellow electric tiger monster of weird zoology')]
    #[ImageCredit('Image by Nilanjan Animesh')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/zapcat.jpg</x-card.hero.local>

    <x-card.taxons>Energos, Tigros</x-card.taxons>

<x-card.phaserule type="Defense" height="200">
<text>
<x-card.skilltitle>Thunder Roar</x-card.skilltitle>
<x-card.normalrule>Roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6,5) Attack has no effect.</x-card.normalrule>
<x-card.normalrule>@dieroll(4,3,2) Attack does only half its damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
