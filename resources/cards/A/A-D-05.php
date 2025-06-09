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
<x-card.cardrule  :lines="6">
    <x-card.ruleline class="smallrule">A Monster may use this Defense if it is not subject to an Attack.</x-card.ruleline>
<x-card.ruleline>Choose an opposing Monster that is</x-card.ruleline>
<x-card.ruleline>attacking another Monster.</x-card.ruleline>
<x-card.ruleline>If this Monster’s Speed is higher,</x-card.ruleline>
<x-card.ruleline>this Monster takes the damage</x-card.ruleline>
<x-card.ruleline>that Attack would have done.</x-card.ruleline>
        </x-card.cardrule>
HTML;
    }
};
