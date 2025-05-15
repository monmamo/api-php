<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\RaidCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Tattle')]
#[Concept('Cost', 3)]
#[Concept('Training', 2)]
#[ImageCredit('Icon by Lorc from Game-Icons.net')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;
    use RaidCardAttributes { RaidCardAttributes::system insteadof DefaultCardAttributes; }

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="2">
<x-card.normalrule>Each other player gets</x-card.normalrule>
    <x-card.normalrule>+2 Noise.</x-card.normalrule>
</x-card.cardrule>

HTML;
    }
};
