<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Brilliance')]
#[Concept('Cost', 5)]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="2">
<x-card.normalrule>Draw three cards.</x-card.normalrule>
</x-card.cardrule>

HTML;
    }
};
