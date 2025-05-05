<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// In Raid on Leaser Ridge, you will encounter these in the perimeter around the facility. Untrained. Each has 1 or 2 Traits.

return new
#[Title('Clone Monster')]
#[Concept('Monster')]
#[Concept('Level', 10)]
#[Concept('DamageCapacity', '?')]
#[Concept('Size', '?')]
#[Concept('Speed', '?')]
#[Concept('Boost', '1')]
#[ImageCredit('Generated image')]

class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    // <x-card.hero.local>hero/A-M-22.jpeg</x-card.hero.local>
    public function content(): \Traversable
    {
        yield <<<'HTML'
    

<x-card.taxons>Unknown</x-card.taxons>

<x-card.cardrule height="55" >
<x-card.normalrule>On exposure:
<x-card.normalrule>Trigger Security Check &</x-card.normalrule>
<x-card.normalrule>Attach 2 random Traits.</x-card.normalrule>
<x-card.normalrule>Damage Capacity:: 20 + 1d6 - 1d6.</x-card.normalrule>
<x-card.normalrule>Size: 4 + 
</x-card.cardrule>
HTML;
    }
};
