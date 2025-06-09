<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sprinkler System')]
#[Prerequisites(['Put this card in the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline class="smallrule">Discard all Fire and Fire-type cards on the Battlefield.</x-card.ruleline>
</text>
 </x-card.phaserule>
H
HTML;
    }
};
