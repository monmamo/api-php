<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('From Bad to Worse')]
#[Concept('Environment')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.cardrule :>
<x-card.ruleline>Discard this card once there are no longer</x-card.ruleline>
<x-card.ruleline>any Bane cards attached to any Monsters</x-card.ruleline>
<x-card.ruleline>on the Battlefield.</x-card.ruleline>
<x-card.ruleline>The redemptive properties of the Bane cards</x-card.ruleline>
<x-card.ruleline>attached to Monsters have no effect.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
