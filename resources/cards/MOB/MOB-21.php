<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\LocalHeroImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

// https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2F0lqNV7_F94.jpeg?alt=media&token=78f7b026-4cd1-49a6-8fc0-2c1d2692f962
return new
#[Title('Hallucinogenic Dart')]
#[Concept('Bane')]
#[Concept('Item')]
#[Concept('Weapon')]
#[LocalHeroImage('A306.png')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="110" >
<x-card.normalrule>For 1d4 turns (including this one),</x-card.normalrule>
<x-card.normalrule>apply Confusion.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
