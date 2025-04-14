<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Interceptor')]
#[Concept('Mobster')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>When another player plays a Vendor card, you may intervene. The opposing player must pay any cost associated with the draw, but you may use whatever benefit they would get for that cost.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
