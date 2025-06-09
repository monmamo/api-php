<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('F* Around and Find Out')]
#[Prerequisites(['Place this card on the Battlefield.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <x-card.phaserule type="Resolution" >
        <text >
<x-card.ruleline>Each time someone attacks one of your</x-card.ruleline>
<x-card.ruleline>Monsters, you may draw a card.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
    }
};
