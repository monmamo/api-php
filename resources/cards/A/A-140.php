<?php

// inspiration:: Giovanni's Last Resort PTCG card https://bulbapedia.bulbagarden.net/wiki/Giovanni%27s_Last_Resort_(Gym_Challenge_105)
return new
#[\App\GeneralAttributes\Title('Last Resort')]

    #[\App\Concept('Upkeep')]



    //#[\App\CardAttributes\ImageCredit("Image by USER_NAME on SERVICE")]

    #[\App\CardAttributes\FlavorText('Now is not the time to panic.')]
    'background' => \view('Upkeep.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
#[\App\CardAttributes\LocalHeroImage('TODO.png')]
<x-card.phaserule type="Upkeep" lines="3"><text>
<x-card.normalrule>Discard your hand.</x-card.normalrule>
<x-card.normalrule>Then remove all Damage </x-card.normalrule>
    <x-card.normalrule>from one of your Monsters.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
}
};
