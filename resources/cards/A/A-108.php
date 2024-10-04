<?php

return new
#[\App\GeneralAttributes\Title('Grab Bag')]

    #[\App\Concept('Draw')]



    #[\App\CardAttributes\ImageCredit('Shutterstock #2348597925')]


    'background' => \view('Draw.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
  <image x="0" y="0" class="hero" href="@local(A108.jpg)" />
  <x-card.phaserule type="Draw"  height="160"><text >
  <x-card.normalrule>Reveal the top 7 cards of your Library.</x-card.normalrule>
<x-card.normalrule>You may put any Item cards in your hand.</x-card.normalrule>
<x-card.normalrule>Discard the rest.</x-card.normalrule>
<x-card.normalrule>Then discard this card.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
}
};
