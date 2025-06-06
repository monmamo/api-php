<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('I Shot the Sheriff')]
#[Concept('Upkeep')]
#[FlavorText(["But I didn't shoot the deputy."])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.normalrule>Exile the Sheriff card.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
