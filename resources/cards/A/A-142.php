<?php

return new
#[\App\GeneralAttributes\Title('Law Enforcement Raid')]

    #[\App\Concept('Catastrophe')]



    //#[\App\CardAttributes\ImageCredit("Image by USER_NAME on SERVICE")]


    'background' => \view('Catastrophe.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
#[\App\CardAttributes\LocalHeroImage('TODO.png')]
<x-card.cardrule height="130" >
<x-card.normalrule>Exile all Mobster cards on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Any further Mobster cards that</x-card.normalrule>
<x-card.normalrule>are revealed go immediately to Exile.</x-card.normalrule>
</x-card.cardrule>
HTML;
}
};
