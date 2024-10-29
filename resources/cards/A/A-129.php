<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Inappropriate Traffic Stop')]
    #[Concept('Draw')]
    #[LocalHeroImage('TODO.png')]
    // #[\App\CardAttributes\ImageCredit('Image by USER_NAME on SERVICE')]
    #[FlavorText('Also called "airport security."')]

    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'
<x-card.cardrule  lines="4">
<x-card.normalrule>Look at the top 5 cards of any Library.</x-card.normalrule>
<x-card.normalrule>Discard any number of Item cards you find</x-card.normalrule>
<x-card.normalrule>there. The owner of the Library shuffles</x-card.normalrule>
<x-card.normalrule>the other cards back into their deck.</x-card.normalrule>
</x-card.cardrule>
HTML;
        }
    };
