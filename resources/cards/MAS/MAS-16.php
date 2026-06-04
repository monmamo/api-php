<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Nonresistance')]
#[Concept('Defense')]
#[Concept('Level', 15)]
#[ImageCredit('')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="165" >
<x-card.ruleline>Prevent 1d% damage.</x-card.ruleline>
<x-card.ruleline>The attacking Monster takes the</x-card.ruleline>
<x-card.ruleline>amount of Damage prevented.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
