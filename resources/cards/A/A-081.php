
<?php
// https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Recycle')]
#[Concept('Draw')]
#[ImageCredit('Image by logturnal on Freepik')]
#[FlavorText('Recycle today for a better upkeep phase tomorrow.')]
#[LocalHeroImage('A212.jpg')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule lines="2">
<x-card.normalrule>Put a card from your Discard</x-card.normalrule>
<x-card.normalrule>pile into your hand.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
