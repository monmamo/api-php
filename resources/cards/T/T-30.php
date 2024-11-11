<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// 'https://game-icons.net/1x1/delapouite/blindfold.html'

return new
#[Title('Trained while Blindfolded')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
