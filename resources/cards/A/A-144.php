<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Friendly Exchange')]
#[Concept('Draw')]
#[FlavorText(['Take the gun. Leave the cannoli.'])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.phaserule type="Draw" ><text>
<x-card.ruleline>Choose one opponent.</x-card.ruleline>
<x-card.ruleline>That opponent may search their Library for a Weapon.</x-card.ruleline>
<x-card.ruleline>You may search your Library for any number of Food items.</x-card.ruleline>
<x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
</text></x-card.phaserule>
HTML;
    }
};
