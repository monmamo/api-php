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
<x-card.normalrule>If this Monster attacks and the</x-card.normalrule>
<x-card.normalrule>targeted Monster uses a Defense,</x-card.normalrule>
<x-card.normalrule>reduce the damage prevented by 1d6.</x-card.normalrule>
    </text>
</x-card.cardrule>
HTML;
    }
};
