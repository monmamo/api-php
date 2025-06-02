<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Seaweed')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('Level', 40)]
    #[Concept('DamageCapacity', 23)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', 3)]
    #[Concept('Cost', 8)]
    #[ImageCredit('Image by Nilanjan Animesh')]
    #[ImagePrompt('brown cat of weird zoology swimming in a lake')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-03.jpg</x-card.hero.local>

    <x-card.taxons>Aquos, Felos</x-card.taxons>

<x-card.phaserule type="Skill" height="245">
    <text>
<x-card.skilltitle>Saliva Spray</x-card.skilltitle>
<x-card.normalrule>Discard 1+ Water (A-001) from this Monster.</x-card.normalrule>
<x-card.normalrule>For each Water (A-001) discarded,</x-card.normalrule>
<x-card.normalrule>Attack does 1 @damage less damage,</x-card.normalrule>
<x-card.normalrule>&amp; that Monster takes that damage instead.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
