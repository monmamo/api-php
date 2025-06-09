<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Stitches')]
#[Prerequisites(['You may play this card only if you have a Mobster card on the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline>Discard any card with Snitch (MOB-17) attached and all cards attached to those cards.</x-card.ruleline>
</text>
 </x-card.phaserule>

HTML;
    }
};
