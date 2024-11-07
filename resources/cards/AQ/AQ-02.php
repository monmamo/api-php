<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Sprinkler System')]
#[Prerequisites(['Put this card in the Battlefield.'])]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" height="40">
       <text >
<x-card.smallrule>Discard all Fire and Fire-type cards on the Battlefield.</x-card.smallrule>
</text>
 </x-card.phaserule>
H
HTML;
    }
};
