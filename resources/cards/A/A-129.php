<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Inappropriate Traffic Stop')]
    #[Concept('Draw')]
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.flavortext>Also called "airport security."</x-card.flavortext>

    <x-card.cardrule  >
<x-card.ruleline>Look at the top 5 cards of any Library.</x-card.ruleline>
<x-card.ruleline>Discard any number of Item cards you find</x-card.ruleline>
<x-card.ruleline>there. The owner of the Library shuffles</x-card.ruleline>
<x-card.ruleline>the other cards back into their deck.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</x-card.cardrule>
HTML;
        }
    };
