<?php
use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://en.wikipedia.org/wiki/Rabies

return new
    #[Title('Pestilence')]
    #[Concept('Catastrophe')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="0" >
Discard all Mobster and Bystander cards in play.
Draw phase: Discard 1 card from your Library before taking any other action.
Resolution phase: After resolving all other effects, each Monster in play takes 1d4 damage.
</x-card.cardrule>
HTML;}};
