<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('First Aid Station')]
#[Concept('Durable')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.normalrule>Upkeep phase:: You may "attach" a Monster to First Aid Station. That Monster may not use any Skills nor be affected by any Skills during this turn. At the end of this turn, remove all damage and [[Bane]]s from that Monster and "detach" it from First Aid Station.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
