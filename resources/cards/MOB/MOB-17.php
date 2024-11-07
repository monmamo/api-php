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
     <x-card.phaserule type="Upkeep" height="240">
       <text >
<x-card.normalrule>Attach this card to one of those cards.</x-card.normalrule>
<x-card.normalrule>Choose one opponent. That opponent must </x-card.normalrule>
<x-card.normalrule>show you their hand. </x-card.normalrule>
<x-card.normalrule>(Only you get to see the hand.)</x-card.normalrule>
</text>
 </x-card.phaserule>
HTML;
    }
};
