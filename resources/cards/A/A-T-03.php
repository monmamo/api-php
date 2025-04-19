<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\IsGeneratedImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Berserk')]
    #[Concept('Trait')]
    #[Concept('Speed', '+?')]
    #[Concept('Cost', 3)]
    #[IsGeneratedImage]
    #[ImageIsPrototype]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield '<x-card.hero.local>hero/A-T-03.jpeg</x-card.hero.local>';

            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2"><text>
            <x-card.normalrule>Increase Speed by 1</x-card.normalrule>
            <x-card.normalrule>for each 4 @damage taken.</x-card.normalrule>
        </text></x-card.phaserule>
HTML;
        }
    };
