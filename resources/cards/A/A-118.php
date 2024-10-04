<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Head Coach')]

    #[Concept('Master')]
    #[Concept('Coach')]
    #[Concept('Male')]
    #[Concept('Integrity', '2d6')]
    #[IsGeneratedImage]
    #[LocalHeroImage('A-055.png')]
    class implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'


<text y="500" filter="url(#solid)">
        <x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
<x-card.smallrule>You may choose to make this card Female </x-card.smallrule>
    <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
    </text>

    <x-card.phaserule type="Resolution" :lines="5">
        <text >
<x-card.normalrule>Your Monsters' attacks</x-card.normalrule>
<x-card.normalrule>do 1d6 more damage and</x-card.normalrule>
<x-card.normalrule>defenses prevent 1d6 more damage.</x-card.normalrule>
<x-card.normalrule>You may put the Skill cards you use</x-card.normalrule>
<x-card.normalrule>at the bottom of your Library.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
