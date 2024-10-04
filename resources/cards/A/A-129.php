<?php

return new
    #[\App\GeneralAttributes\Title('Inappropriate Traffic Stop')]
    #[\App\Concept('Draw')]
    #[\App\CardAttributes\LocalHeroImage('TODO.png')]
    #[\App\CardAttributes\ImageCredit('Image by USER_NAME on SERVICE')]
    #[\App\CardAttributes\FlavorText('Also called "airport security."')]

    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
<x-card.phaserule type="Draw" lines="4"><text>
<x-card.normalrule>Look at the top 5 cards of any Library.</x-card.normalrule>
<x-card.normalrule>Discard any number of Item cards you find</x-card.normalrule>
<x-card.normalrule>there. The owner of the Library shuffles</x-card.normalrule>
<x-card.normalrule>the other cards back into their deck.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
}
};
