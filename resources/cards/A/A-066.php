
<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Cruel Order')]
#[Concept('Catastrophe')]
#[ImageCredit('Generated with StarryAI. Placeholder image.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
    <image x="0" y="0" class="hero" href="@local(A066.jpeg)" />

    <x-card.cardrule :lines="3">
    <x-card.normalrule>Discard the highest-level Monster</x-card.normalrule>
<x-card.normalrule>of each opponent</x-card.normalrule>
<x-card.normalrule>and all cards attached to that Monster.</x-card.normalrule>
    </x-card.cardrule>
HTML;
    }
};
