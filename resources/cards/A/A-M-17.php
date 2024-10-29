<?php

return new
#[\App\GeneralAttributes\Title('UNNAMED MONSTER')]

    #[\App\Concept('Monster')]



    #[\App\CardAttributes\ImageCredit('Image by USER_NAME on SERVICE')]

    #[\App\CardAttributes\LocalHeroImage('TODO.png')]

    class(__FILE__) implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'

<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
}
};
