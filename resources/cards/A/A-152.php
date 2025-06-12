<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\ImagePrompt;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Favorite Toy')]
#[Concept('Item')]
#[Concept('Cost', 2)]
    #[ImageCredit('Image by Nilanjan Animesh')]
#[ImagePrompt('A fantastical mammal monster from a world of weird zoology, with patchy fur, two eyes, an asymmetrical body, and mismatched limbs, sitting in a dimly lit room. It gently clutches a small, cuddly stuffed animal, worn and stitched, with one button eye and fraying seams. The creature\'s expression is soft and emotional, conveying attachment or loneliness. The background is abstract and dreamlike, with soft shadows and eerie textures. Highly detailed, surreal, soft lighting, whimsical but unsettling atmosphere.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/favorite-toy.jpg</x-card.hero.local>

<x-card.flavortext>Your trusted companion's trusted companion.</x-card.flavortext>

<x-card.phaserule type="Resolution" ><text>
<x-card.ruleline class="smallrule">Attach this card to a Monster.</x-card.ruleline>
<x-card.ruleline>If this Monster doesn't attack,</x-card.ruleline>
<x-card.ruleline>restore 2 @damage.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
    }
};
