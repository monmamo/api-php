<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
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
    #[Concept('Boost',3)]
    #[ImagePrompt('yellow electric tiger monster of weird zoology')]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImageCredit(null)]
    #[LocalHeroImage('hero/A-M-06.png')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Energos, Tigros</x-card.normalrule>
</x-card.cardrule>

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
