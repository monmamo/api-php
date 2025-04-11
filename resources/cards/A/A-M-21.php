<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
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
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImageCredit(null)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-21.png</x-card.hero.local>

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
