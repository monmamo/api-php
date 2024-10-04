<?php

return new
#[\App\GeneralAttributes\Title('First Aid Kit')]

    #[\App\Concept('Vendor')]



    #[\App\CardAttributes\ImageCredit(null)]


    'background' => \view('Vendor.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
#[\App\CardAttributes\LocalHeroImage('hero/first-aid-kit.jpg')]
<x-card.phaserule type="Draw" height="165"><text>
<x-card.normalrule>Search your Library or Discard </x-card.normalrule>
<x-card.normalrule>for a Healing Item card.</x-card.normalrule>
<x-card.normalrule>Put the card you find in your hand.</x-card.normalrule>
<x-card.smallrule>If you searched your Library, shuffle it.</x-card.smallrule>
</text></x-card.phaserule>

HTML;
}
};
