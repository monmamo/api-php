<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Whistleblower')]
#[Concept('Cost', 8)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="3">
<x-card.normalrule>Choose one player.</x-card.normalrule>
<x-card.normalrule>That player must trash one card</x-card.normalrule>
<x-card.normalrule>from his hand or the top of his Library.</x-card.normalrule>
</x-card.cardrule>

HTML;
    }
};
