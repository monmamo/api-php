<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\FlavorText;
use App\CardAttributes\ImageIsPrototype;
use App\CardAttributes\ImagePrompt;
use App\CardAttributes\IsGeneratedImage;
use App\CardAttributes\Prerequisites;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Favorite Toy')]
#[Concept('Item')]
#[IsGeneratedImage]
#[ImageIsPrototype]
#[Prerequisites(lines: 'Attach this card to a Monster.')]
#[ImagePrompt('A fantastical mammal monster from a world of weird zoology, with patchy fur, two eyes, an asymmetrical body, and mismatched limbs, sitting in a dimly lit room. It gently clutches a small, cuddly stuffed animal, worn and stitched, with one button eye and fraying seams. The creature\'s expression is soft and emotional, conveying attachment or loneliness. The background is abstract and dreamlike, with soft shadows and eerie textures. Highly detailed, surreal, soft lighting, whimsical but unsettling atmosphere.')]
#[FlavorText('Your trusted companion\'s trusted companion.')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.local>hero/A-152.jpeg</x-card.hero.local>

<x-card.cardrule y="600" height="55" >
<x-card.normalrule>Attach this card to a Monster.</x-card.normalrule>
</x-card.cardrule>

<x-card.phaserule type="Resolution" lines="2"><text>
<x-card.normalrule>If this Monster doesn't attack,</x-card.normalrule>
<x-card.normalrule>restore 2 @damage.</x-card.normalrule>
</text></x-card.phaserule>
HTML;
    }
};
