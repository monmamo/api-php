<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Fragrance')]
#[Concept('Trait')]
#[FlavorText('Thank you for bathing your monster.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="330" >
<x-card.normalrule>Fragrance Strength: 1d6</x-card.normalrule>
<x-card.normalrule>(rolled at attach; can be increased by Power Up)</x-card.normalrule>
<x-card.normalrule>Reduce damage done by any</x-card.normalrule>
<x-card.normalrule>Monsters' Attacks by Fragrance Strength.</x-card.normalrule>
<x-card.normalrule>Reduce damage prevented by any</x-card.normalrule>
<x-card.normalrule>Monsters' Defenses by Fragrance Strength.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
