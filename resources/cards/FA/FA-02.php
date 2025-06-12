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
<x-card.phaserule type="Draw" lines="6"><text>
<x-card.ruleline>Search your Library for 1 Healing card.</x-card.ruleline>
<x-card.ruleline>Reveal the card, then put it in your hand.</x-card.ruleline>
<x-card.ruleline>Shuffle your Library afterwards.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Vendor')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
