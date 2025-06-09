<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title("Boss's Orders")]
#[Concept('Bane')]
#[Concept('Cost', 5)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>TODO.png</x-card.hero.local>

<x-card.cardrule >
<x-card.ruleline class="smallrule">You may use this card only if you have a Boss card in play.</x-card.ruleline>
<x-card.ruleline>This Monster may not use any Attack while it is in play.</x-card.ruleline>
</x-card.cardrule>
HTML;
    }
};
