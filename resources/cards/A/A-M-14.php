<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Whiskers')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('DamageCapacity', 16)]
    #[Concept('Level', 44)]
    #[Concept('Size', 4)]
    #[Concept('Speed', 3)]
    #[Concept('Boost', '2')]
    #[IsGeneratedImage]
#[ImageIsPrototype]
    #[ImagePrompt('lavender cat monster of weird zoology by a lake')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/regfelor.png</x-card.hero.local>

    <x-card.cardrule y="530" height="55" >
<x-card.normalrule>Taxons: Regos, Felos</x-card.normalrule>
</x-card.cardrule>


<x-card.phaserule type="Resolution" height="175">
    <text>
<x-card.skilltitle>Mind Control</x-card.skilltitle>
<x-card.normalrule>If attacked, roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(6) The attack has no effect.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
        }
    };
