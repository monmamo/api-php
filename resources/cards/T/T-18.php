<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Charisma')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Resolution phase:: If this Monster attacks and the targeted Monster uses a Defense, reduce the damage prevented by 1d6.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
