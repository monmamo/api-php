<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[IsIncomplete]
#[Title('Intimidating Form')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Defense" lines="3"><text>
<x-card.normalrule>Prevents Size @damage.</x-card.normalrule>
    </text></x-card.phaserule>
HTML;
    }
};
