<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\IsIncomplete;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[IsIncomplete]
#[Title('Grounded')]
#[Concept('Trait')]
#[ImageCredit('Icon by Azza Rizqi in the Noun Project')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
        <x-card.hero.svg viewBox="0 0 847 1058.75" ><path fill="#ffffff" d="M85 487l319 0 0 -371 39 0 0 371 319 0 0 39 -677 0 0 -39zm94 78l489 0 0 29 -489 0 0 -29zm200 137l89 0 0 29 -89 0 0 -29zm-84 -63l256 0 0 29 -256 0 0 -29z"/></x-card.hero.svg>
<x-card.cardrule >
<x-card.normalrule>Electricity skills have no effect on this Monster.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
