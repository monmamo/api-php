<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Welcome to Flavortext')]
#[Concept('Draw')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text>
<x-card.normalrule>Search your Library for a card with flavor text.</x-card.normalrule>
<x-card.normalrule>Put it in your hand. Shuffle your Library.</x-card.normalrule>
    </text>
HTML;
    }
};
