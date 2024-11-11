<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// 'https://game-icons.net/1x1/lorc/eyestalk.html',

return new
#[Title('Eyes on Stalks')]
#[Concept('Trait')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="55" >
<x-card.normalrule>Speed +4.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
