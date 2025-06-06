<?php

use App\CardAttributes\DefaultCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Clinic')]
#[Concept('Facility')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule >
<x-card.normalrule>Upkeep phase:: Each player may heal 3 @damage from 1 of his or her Monsters.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
