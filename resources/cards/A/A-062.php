<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Delivery Service')]
#[Concept('Vendor')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text>
<x-card.normalrule>Search your Library for an Item card.</x-card.normalrule>
<x-card.normalrule>Reveal it. Then put it in your hand.</x-card.normalrule>
    </text>
HTML;
    }
};
