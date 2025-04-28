<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Gather Fire')]
#[Concept('Draw')]
#[ImageCredit('Icon by Carl Olsen under CC BY 3.0 on Game-Icons.Net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
            <x-card.hero.svg>{{ \view('Pyros.icon') }}</x-card.hero.svg>

            <text y="550" filter="url(#solid)">
<x-card.normalrule>Transfer a Fire (A-002)</x-card.normalrule>
<x-card.normalrule>from your Discard pile</x-card.normalrule>
<x-card.normalrule>to one of your Pyros Monsters.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
    </text>
HTML;
    }
};
