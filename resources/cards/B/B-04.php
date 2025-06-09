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
<x-card.cardrule>
<x-card.ruleline>You may play this card only with an Attack.</x-card.ruleline>
    <x-card.ruleline>Limit 2 per Monster.</x-card.ruleline>
</x-card.cardrule>

<x-card.phaserule type="Resolution" >
<text >
TODO
</text>
</x-card.phaserule>
HTML;
    }
};
