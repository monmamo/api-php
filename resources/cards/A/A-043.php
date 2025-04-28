<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Creepy Guy in the Alley')]
#[Concept('Vendor')]
#[Concept('Integrity', '2')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Psst. I got a great deal for you.</x-card.flavortext>

<x-card.phaserule type="Draw" lines="4">
<text >
<x-card.normalrule>Cut your deck.</x-card.normalrule>
<x-card.normalrule>Draw the top 2 cards of the bottom half.</x-card.normalrule>
<x-card.normalrule>Put the top half back on top of the bottom half.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</text>
</x-card.phaserule>

HTML;
    }
};
