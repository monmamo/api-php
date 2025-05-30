<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Refurbish')]
#[Concept('Draw')]
#[ImageCredit('Image by logturnal on Freepik')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
  <image x="0" y="0" class="hero" href="@local(A212.jpg)" />

    <text y="500" filter="url(#solid)">
      <x-card.normalrule>Shuffle up to three Item cards</x-card.normalrule>
      <x-card.normalrule>from your Discard pile into your Library.</x-card.normalrule>
      <x-card.smallrule :source="\App\Concept::make('Draw')->standardRule()" />
      </text>
HTML;
    }
};
