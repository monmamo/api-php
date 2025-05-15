<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\CardAttributes\RaidCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Portable Hard Drive')]
#[Concept('Evidence', 5)]
#[Concept('Cost', 3)]
#[ImageCredit('Image by qalebstudio on Freepik')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;
    use RaidCardAttributes { RaidCardAttributes::system insteadof DefaultCardAttributes; }

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/LR-17.jpg</x-card.hero.local>
<x-card.cardrule lines="4">
<x-card.normalrule>You may place this item in Cargo Shorts (LR-18).</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
