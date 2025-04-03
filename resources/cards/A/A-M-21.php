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
    #[Title('Siria')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 16)]
    #[Concept('Level', 35)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '3')]
    #[LocalHeroImage('hero/A-M-21.png')]
    #[IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Canos, Lumos</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Trait" height="150">
    <text>
<x-card.skilltitle>Soothing Glow</x-card.skilltitle>
<x-card.normalrule>Reduce Speed of all other Monsters by 2.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
