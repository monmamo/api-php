<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Bottle Rocket')]
#[Concept('Weapon')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Upkeep" ><text>
<x-card.normalrule>Roll 1d20 for each Monster in play</x-card.normalrule>
<x-card.normalrule>(including those that are</x-card.normalrule>
<x-card.normalrule>Knocked Out). The one that gets the</x-card.normalrule>
<x-card.normalrule>lowest number takes 6 @damage.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
