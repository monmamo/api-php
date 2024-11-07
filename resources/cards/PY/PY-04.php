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
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Discard any number of cards. </x-card.normalrule>
<x-card.normalrule>For each card you discarded, you may attach a </x-card.normalrule>
<x-card.normalrule>Fire card from your hand to </x-card.normalrule>
<x-card.normalrule>a Pyros Monster.</x-card.normalrule>
</text>
 </x-card.phaserule>

HTML;
    }
};
