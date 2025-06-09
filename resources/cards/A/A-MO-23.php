<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Criminal Mastermind')]
#[Concept('Mobster')]
#[Concept('Integrity')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Draw" >
       <text >
<x-card.ruleline>Search your Library for any card.</x-card.ruleline>
<x-card.ruleline>You may take another Draw phase.</x-card.ruleline>
</text>
</x-card.phaserule>

HTML;
    }
};
