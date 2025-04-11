<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title("Boss's Orders")]
#[Concept('Bane')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>TODO.png</x-card.hero.local>

<x-card.cardrule height="95" >
<x-card.smallrule>You may use this card only if you have a Boss card in play.</x-card.smallrule>
<x-card.normalrule>This Monster may not use any Attack while it is in play.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
