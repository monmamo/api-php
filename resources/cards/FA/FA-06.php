<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('First Aid Tax')]

#[Prerequisites(['You may play this card only if a First Aid card is in play.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline>Each opposing player discards the top card from their Library. Exile this card.</x-card.ruleline>
</text>
 </x-card.phaserule>

HTML;
    }
};
