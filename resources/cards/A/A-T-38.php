<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[IsIncomplete]
#[Title('Asexuality')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule  >
<x-card.ruleline>Male and Female effects on other Monsters</x-card.ruleline>
<x-card.ruleline>have no effect on this Monster.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
