<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

//     'image-prompt' => 'https://game-icons.net/1x1/delapouite/leapfrog.html',

return new
#[Title('Leapfrogging')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Dodge prevents all Ground damage.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
