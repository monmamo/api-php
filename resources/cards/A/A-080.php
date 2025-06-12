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
      <x-card.ruleline>Shuffle up to three Item cards</x-card.ruleline>
      <x-card.ruleline>from your Discard pile into your Library.</x-card.ruleline>
      <x-card.ruleline class="smallrule" :source="\App\Concept::make('Draw')->standardRule()" />
      </text>
HTML;
    }
};
