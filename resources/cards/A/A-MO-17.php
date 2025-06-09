<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Snitch')]
#[Prerequisites(['You may play this card only if you have a Master, Mobster or Bystande card on the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
     <x-card.phaserule type="Upkeep" >
       <text >
<x-card.ruleline>Attach this card to one of those cards.</x-card.ruleline>
<x-card.ruleline>Choose one opponent. That opponent must</x-card.ruleline>
<x-card.ruleline>show you their hand.</x-card.ruleline>
<x-card.ruleline>(Only you get to see the hand.)</x-card.ruleline>
</text>
 </x-card.phaserule>
HTML;
    }
};
