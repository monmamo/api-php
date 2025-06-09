<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Biker Bar')]
#[Concept('Facility')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>Only Mobster cards allowed on the Battlefield are those who are members of a Motorcycle Gang.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
