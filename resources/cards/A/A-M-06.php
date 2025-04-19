<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Zapcat')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Level', 40)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', 3)]
    #[ImagePrompt('yellow electric tiger monster of weird zoology')]
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-06.png</x-card.hero.local>

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
