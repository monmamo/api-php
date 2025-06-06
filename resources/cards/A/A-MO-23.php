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
<x-card.normalrule>Search your Library for any card.</x-card.normalrule>
<x-card.normalrule>You may take another Draw phase.</x-card.normalrule>
</text>
</x-card.phaserule>

HTML;
    }
};
