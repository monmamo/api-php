<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Grenade')]
#[Concept('Weapon')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Choose a Monster on the Battlefield. </x-card.normalrule>
<x-card.normalrule>That Monster takes 2d4 damage. </x-card.normalrule>
<x-card.normalrule>The other Monsters on that team take 1d4 damage.</x-card.normalrule>
</text>
 </x-card.phaserule>
HTML;
    }
};
