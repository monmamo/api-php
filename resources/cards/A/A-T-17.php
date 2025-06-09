<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Brutality')]
    #[Concept('Trait')]
    #[Concept('Cost', 4)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" >
<text >
<x-card.ruleline>Multiply damage done</x-card.ruleline>
<x-card.ruleline>by Attacks by Boost.</x-card.ruleline>
</text>
</x-card.phaserule>
HTML;
        }
    };
