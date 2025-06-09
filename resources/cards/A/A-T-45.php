<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[IsIncomplete]
#[Title('Charisma')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Resolution" ><text>
<x-card.ruleline>If this Monster attacks and the</x-card.ruleline>
<x-card.ruleline>targeted Monster uses a Defense,</x-card.ruleline>
<x-card.ruleline>reduce the damage prevented by 1d6.</x-card.ruleline>
    </text>
</x-card.cardrule>
HTML;
    }
};
