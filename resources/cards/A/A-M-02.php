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
    #[Title('Yellowback')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 20)]
    #[Concept('Level', 35)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost',2)]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImageCredit(null)]
    #[ImagePrompt('blue and yellow otter of weird at the edge of the water on a beach')]
    #[LocalHeroImage('hero/A-M-02.png')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Aquos, Lutros</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Defense" height="175">
<text>
<x-card.skilltitle>Roll Away</x-card.skilltitle>
<x-card.normalrule>Prevent 3 @damage plus</x-card.normalrule>
<x-card.normalrule>1 @damage for each Water (A-001) attached.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
