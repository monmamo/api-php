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
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline>Choose a Mobster in play that is not a Boss.</x-card.ruleline>
<x-card.ruleline>Discard it and all cards attached to it.</x-card.ruleline>
</text>
 </x-card.phaserule>
H
HTML;
    }
};
