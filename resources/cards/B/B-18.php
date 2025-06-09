<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://en.wikipedia.org/wiki/Rabies

return new
    #[Title('Blizzard')]
    #[Concept('Catastrophe')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Not the ice cream treat.</x-card.flavortext>

<x-card.cardrule >TODO</x-card.cardrule>
HTML;
    }
};
