<?php

return new
#[\App\GeneralAttributes\Title('UNNAMED MONSTER')]

    #[\App\Concept('Monster')]



    #[\App\CardAttributes\ImageCredit('Image by USER_NAME on SERVICE')]


    'background' => \view('Monster.background'),
    class implements \App\Contracts\Card\CardComponents {
use \App\CardAttributes\DefaultCardAttributes;
public function content(): \Traversable    {
yield <<<'HTML'
#[\App\CardAttributes\LocalHeroImage('TODO.png')]
<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
}
};
