<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Call of Fire')]
#[Concept('Draw')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" ><text>
<x-card.ruleline>Search your Library for a Pyros Monster.</x-card.ruleline>
<x-card.ruleline>Reveal it, then put it in your hand.</x-card.ruleline>
<x-card.ruleline>Then, shuffle your Library.</x-card.ruleline>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
