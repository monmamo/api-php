<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

//  'flavor-text' => ,

return new
#[IsIncomplete]
#[Title('Blade Arms')]
#[Concept('Trait')]
#[FlavorText(['Adds a slashing effect to Pounce and physical attacks.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.ruleline></x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
