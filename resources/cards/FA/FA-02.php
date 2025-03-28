<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Apothecary')]
#[Concept('Vendor')]
#[Concept('Integrity')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="165" >
<x-card.normalrule>Search your Library for 1 Healing card.</x-card.normalrule>
<x-card.normalrule>Reveal the card, then put it in your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle your Library afterwards.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Vendor')->standardRule()" />
</x-card.cardrule>
HTML;
    }
};
