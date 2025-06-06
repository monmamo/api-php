<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Minion')]
#[Concept('Mobster')]
#[Concept('DamageCapacity', '12')]
#[Concept('Size', '4')]
#[Concept('Speed', '4')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.normalrule>Upkeep phase: Draw a card. You may take another Draw phase.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
