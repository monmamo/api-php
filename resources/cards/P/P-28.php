<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Barrow')]
#[ImageCredit('')]
#[Concept('Place')]
#[FlavorText(['A cavern with primarily earthen ruins below the surface of a mound, hill or mountain where ancient rulers and warriors would be laid to rest.'])]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline>TODO</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
