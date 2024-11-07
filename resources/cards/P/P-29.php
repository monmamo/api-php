<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Fortress')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
