<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Intercept')]
#[Concept('Defense')]
#[Concept('Level', 25)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<text y="495" filter="url(#solid)">
    <x-card.smallrule>A Monster may use this Defense if it is not subject to an Attack.</x-card.smallrule>
<x-card.normalrule>Choose an opposing Monster that is</x-card.normalrule>
<x-card.normalrule>attacking another Monster.</x-card.normalrule>
<x-card.normalrule>If this Monster’s Speed is higher,</x-card.normalrule>
<x-card.normalrule>this Monster takes the damage</x-card.normalrule>
<x-card.normalrule>that Attack would have done.</x-card.normalrule>
        </text>
HTML;
    }
};
