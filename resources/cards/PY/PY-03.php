<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Candlewax')]
#[Concept('Consumable')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule  >
<x-card.ruleline>As long as Candlewax is attached,</x-card.ruleline>
<x-card.ruleline>each Fire (A-002) attached to the Monster</x-card.ruleline>
<x-card.ruleline>counts as 2 Fire mana.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
