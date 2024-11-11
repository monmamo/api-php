<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

//  'image-prompt' => 'https://game-icons.net/1x1/delapouite/cyber-eye.html',

return new
#[Title('Cybernetic Eyes')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Speed +5.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
