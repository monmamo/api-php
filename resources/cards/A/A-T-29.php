<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Stealth')]
    #[Concept('Trait')]
    #[Concept('Cost', 4)]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.phaserule type="Resolution" :>
<text >
<x-card.ruleline>When attacking, roll 1d6. If 6,</x-card.ruleline>
<x-card.ruleline>do not apply declared Defense.</x-card.ruleline> 
<x-card.ruleline>Can be improved with Power Up.</x-card.ruleline>
</text>
</x-card.cardrule>
HTML;
        }
    };
