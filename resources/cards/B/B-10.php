<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Hailstorm')]
    #[Concept('Catastrophe')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule>
<x-card.ruleline>Discard all Mobster and Bystander cards on the Battlefield.</x-card.ruleline>
<x-card.ruleline>Discard all Item cards on the Battlefield.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
