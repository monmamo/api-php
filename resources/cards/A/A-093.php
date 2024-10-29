<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Flee')]
#[Concept('Defense')]
#[ImageCredit('IMAGE_CREDIT')]
#[FlavorText('FLAVOR_TEXT')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(hero/well-bye.jpg)" />

<text y="80" filter="url(#solid)">
    <x-card.normalrule>Discard this Monster</x-card.normalrule>
    <x-card.normalrule>and all cards attached to it.</x-card.normalrule>
</text>
HTML;
    }
};
