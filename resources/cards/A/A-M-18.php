<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Spike')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Level', 40)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost',3)]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[LocalHeroImage('hero/A-M-18.jpeg')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Aquos, Hystricos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Attack" height="140">
    <text>
<x-card.skilltitle>Ball of Pain</x-card.skilltitle>
<x-card.normalrule>Does Speed+3d6 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
