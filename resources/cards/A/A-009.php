<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Support Gear')]
#[Concept('Cost', 4)]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="2">
<x-card.normalrule>Draw two cards.</x-card.normalrule>
</x-card.cardrule>

HTML;
    }
};
