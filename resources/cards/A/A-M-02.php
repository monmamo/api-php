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
    #[Title('Yellowback')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('DamageCapacity', 20)]
    #[Concept('Level', 35)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', 2)]
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImageCredit(null)]
    #[ImagePrompt('blue and yellow otter of weird at the edge of the water on a beach')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-02.png</x-card.hero.local>

    <x-card.taxons>Aquos, Lutros</x-card.taxons>

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
