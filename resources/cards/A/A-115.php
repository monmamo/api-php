<?php

// {{-- Compare Spy Drone (A-089). --}}
// {{--inspiration:: Hand Scope https://bulbapedia.bulbagarden.net/wiki/Hand_Scope_(Phantom_Forces_96) --}}

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hand Scope')]
#[Concept('Item')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('Here\'s lookin\' at you, kid.')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.phaserule type="Upkeep"  height="130"><text >
        <x-card.normalrule>Roll 1d4. If @dieroll(4), you may ask </x-card.normalrule>
<x-card.normalrule>one opponent to show you their hand.</x-card.normalrule>
<x-card.normalrule>(Only you get to see the hand.)</x-card.normalrule>
</text></x-card.phaserule>  </x-card>
HTML;
    }
};
