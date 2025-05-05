<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Greybeast')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 22)]
    #[Concept('Level', 42)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 2)]
    #[Concept('Boost', '3')]
    #[IsGeneratedImage]
    #[ImageCredit(null)]
    #[\App\CardAttributes\ImageInDevelopment()]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-16.png</x-card.hero.local>

    <x-card.taxons>Gouros</x-card.taxons>

<x-card.phaserule type="Resolution" height="210">
    <text>
<x-card.skilltitle>Nightmare Fuel</x-card.skilltitle>
<x-card.normalrule>Every Monster that does not use an</x-card.normalrule>
<x-card.normalrule>Attack, Defense or Skill during the turn</x-card.normalrule>
<x-card.normalrule>loses 3 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
