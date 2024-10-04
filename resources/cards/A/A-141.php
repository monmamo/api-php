<?php

return new
#[\App\GeneralAttributes\Title('Lottery')]

    #[\App\Concept('Vendor')]


    'image-source' => 'https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm',
    #[\App\CardAttributes\ImageCredit('Image by storyset on Freepik')]

    #[\App\CardAttributes\FlavorText("Can't win if you don't play!")]
    'background' => \view('Vendor.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
#[\App\CardAttributes\LocalHeroImage('A146.jpg')]
<x-card.phaserule type="Draw" lines="2"><text>
        <x-card.normalrule>Discard 2+ cards from your hand.</x-card.normalrule>
        <x-card.normalrule>Then draw that number plus two cards.</x-card.normalrule>
    </text></x-card.phaserule>
HTML;
}
};
