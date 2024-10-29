<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Brutality')]

    #[Concept('Trait')]
#[LocalHeroImage('TODO.png')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" lines="2">
    <text >
<x-card.normalrule>When this Monster attacks,</x-card.normalrule>
<x-card.normalrule>perform two rolls for every roll check.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
        }
    };
