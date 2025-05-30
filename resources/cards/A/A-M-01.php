<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Azure')]
    #[Concept('Monster')]
    #[Concept('Male')]
    #[Concept('Level', 30)]
    #[Concept('DamageCapacity', 18)]
    #[Concept('Size', 3)]
    #[Concept('Speed', 5)]
    #[Concept('Boost', '2')]
    #[Concept('Cost', 6)]
    #[ImagePrompt('blue mouse of weird zoology swimming in a lake')]
    #[ImageCredit('Image by Nilanjan Animesh')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/A-M-01.jpg</x-card.hero.local>

    <x-card.taxons>Aquos, Musos</x-card.taxons>

<x-card.phaserule type="Defense" height="175">
<text >
<x-card.skilltitle>Slippery When Wet</x-card.skilltitle>
<x-card.normalrule>Takes no damage from Physical</x-card.normalrule>
<x-card.normalrule>attacks when 1+ Water (A-001) attached.</x-card.normalrule>
        </text>
</x-card.phaserule>

HTML;
        }
    };
