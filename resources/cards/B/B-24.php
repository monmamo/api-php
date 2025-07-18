<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Ice Storm')]
#[Concept('Catastrophe')]
#[Prerequisites(['This card can be played only if Winter is in play.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="165" >
<x-card.ruleline>Discard all Mobster and Bystander cards in play.</x-card.ruleline>
<x-card.ruleline>Discard all Item cards in play that are not attached to Monsters.</x-card.ruleline>
<x-card.ruleline>Shuffle all Item cards in play that are attached to Monsters into the Library.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
