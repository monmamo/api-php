<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\SvgHeroImage;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Hard Reset')]
#[Concept('Draw')]
#[SvgHeroImage('<path d="M248.91 50c11.882-.006 23.875 1.018 35.857 3.13 85.207 15.025 152.077 81.895 167.102 167.102 15.023 85.208-24.944 170.917-99.874 214.178-32.782 18.927-69.254 27.996-105.463 27.553-46.555-.57-92.675-16.865-129.957-48.15l30.855-36.768c50.95 42.75 122.968 49.05 180.566 15.797 57.597-33.254 88.152-98.777 76.603-164.274-11.55-65.497-62.672-116.62-128.17-128.168-51.656-9.108-103.323 7.98-139.17 43.862L185 192H57V64l46.34 46.342C141.758 71.962 194.17 50.03 248.91 50z" ></path>')]
#[ImageCredit('Image by Delapouite on Game-Icons.net under CC BY 3.0')]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.cardrule height="130" >
<x-card.normalrule>Each player shuffles all</x-card.normalrule>
<x-card.normalrule>discarded cards into his or her Library. </x-card.normalrule>
<x-card.normalrule>This card goes into Exile.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};


