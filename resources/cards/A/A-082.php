<?php

use App\CardAttributes\Concepts;
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\IsGeneratedImage;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Farmer\'s Market')]
#[Concepts('Vendor', 'Integrity:1d4')]
#[IsGeneratedImage]
#[FlavorText('FLAVOR_TEXT')]
class implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
  <image x="0" y="0" class="hero" href="@local(A082.png)" />
  
    <text y="140" filter="url(#solid)">
<x-card.normalrule>Discard any number of cards from your hand.</x-card.normalrule>
<x-card.normalrule>For each card discarded, search your Library</x-card.normalrule>
<x-card.normalrule>for a Monster or Mana card. Reveal those</x-card.normalrule>
<x-card.normalrule>cards, then put them in your hand.</x-card.normalrule>
    </text>
HTML;
    }
};
