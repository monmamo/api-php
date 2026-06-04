<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Buffet')]
#[Concept('Vendor')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule  >
<x-card.ruleline>Search your Library for</x-card.ruleline>
<x-card.ruleline>any number of distinct Mana cards</x-card.ruleline>
<x-card.ruleline>& put them into your hand.</x-card.ruleline>
<x-card.ruleline>Shuffle your Library.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Vendor')->standardRule()" />
</x-card.cardrule>
HTML;
    }
};
