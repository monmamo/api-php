<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Sunken Eye')]
    #[Concept('Bane')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule y="580" :lines="2">
<x-card.normalrule>You may play this card only with an Attack.</x-card.normalrule>
    <x-card.normalrule>Limit 2 per Monster.</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Resolution" height="135">
<text >
TODO
</text>
</x-card.phaserule>
HTML;
    }
};
