<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Fire Boost')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline>Discard any number of cards.</x-card.ruleline>
<x-card.ruleline>For each card you discarded, you may attach a</x-card.ruleline>
<x-card.ruleline>Fire (A-002) from your hand to</x-card.ruleline>
<x-card.ruleline>a Pyros Monster.</x-card.ruleline>
</text>
 </x-card.phaserule>

HTML;
    }
};
