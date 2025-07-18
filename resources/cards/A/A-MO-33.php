<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Signal Stealer')]
#[Concept('Mobster')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Choose an opponent. He/she must put all Attack and Defense cards face up.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
