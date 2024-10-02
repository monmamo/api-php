<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Flamethrower Attack')]
#[Concepts('Attack')]
#[FlavorText('Flamethrower the placeholder image.')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/flamethrower.jpeg)" />

    <text y="500" filter="url(#solid)">
<x-card.smallrule>Requires Pyros and Level 40.</x-card.smallrule>
<x-card.normalrule>Discard any number of Fire cards </x-card.normalrule>
<x-card.normalrule>attached to the Monster using this attack.</x-card.normalrule>
<x-card.normalrule>Does 26d damage for each Fire card discarded.</x-card.normalrule>
    </text>
HTML;
    }
};
