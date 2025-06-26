<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Porcia')]
    #[Concept('Monster')]
    #[Concept('Female')]
    #[Concept('Level', 45)]
    #[Concept('DamageCapacity', 15)]
    #[Concept('Size', 5)]
    #[Concept('Speed', 4)]
    #[Concept('Boost', 4)]
    #[Concept('Cost', 9)]
    #[\App\CardAttributes\IsGeneratedImage]
#[\App\CardAttributes\ImageIsPrototype]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
    <x-card.hero.local>hero/Porcia.png</x-card.hero.local>

    <x-card.taxons>Gouros, Hystrix</x-card.taxons>

HTML;
        }
    };
