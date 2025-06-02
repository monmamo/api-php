<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tattle')]
#[Concept('Cost', 3)]
#[Concept('Training', 2)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="2">
<x-card.normalrule>Each other player must discard one card</x-card.normalrule>
<x-card.normalrule>from his hand or the top of his Library.</x-card.normalrule>
</x-card.cardrule>

HTML;
    }
};
