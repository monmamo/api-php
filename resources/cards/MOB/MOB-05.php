<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Defection')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Choose a Mobster in play that is not a Boss. </x-card.normalrule>
<x-card.normalrule>Discard it and all cards attached to it.</x-card.normalrule>
</text>
 </x-card.phaserule>
H
HTML;
    }
};
