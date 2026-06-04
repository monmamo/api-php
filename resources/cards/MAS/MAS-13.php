<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Proper Warmup')]
#[Concept('Setup')]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="110" >
<x-card.ruleline>Speed +3.</x-card.ruleline>
<x-card.ruleline>If this Monster is Knocked Out, discard this card.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
