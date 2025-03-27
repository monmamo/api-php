<?php

// https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Recycle Mana')]
#[Concept('Draw')]
#[ImageCredit('Image by logturnal on Freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
  <image x="0" y="0" class="hero" href="@local(A212.jpg)" />

<text y="100" filter="url(#solid)">
<x-card.normalrule>Shuffle up to 5 Mana cards</x-card.normalrule>
<x-card.normalrule>from your Discard pile into your Library.</x-card.normalrule>
<x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
</text>
HTML;
    }
};
