<?php

// {{-- Compare Spy Drone (A-089). --}}
// {{--inspiration:: Hand Scope https://bulbapedia.bulbagarden.net/wiki/Hand_Scope_(Phantom_Forces_96) --}}

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hand Scope')]
#[Concept('Item')]
#[Concept('Cost', 2)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.flavortext>Here's lookin' at you, kid.</x-card.flavortext>

<x-card.phaserule type="Upkeep"  ><text >
<x-card.ruleline>Roll 1d4. If @dieroll(4), you may ask</x-card.ruleline>
<x-card.ruleline>1 opponent to show you their hand.</x-card.ruleline>
<x-card.ruleline>(Only you get to see the hand.)</x-card.ruleline>
</text></x-card.phaserule>
HTML;
    }
};
