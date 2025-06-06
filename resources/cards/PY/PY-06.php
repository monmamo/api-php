<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Fire Tail')]
#[ImageCredit('')]

#[Prerequisites(['Requires Pyros and Tail.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.normalrule>Does 2d10 @damage.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
