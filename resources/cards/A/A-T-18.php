<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Deception')]
#[Concept('Trait')]
#[ImageCredit('Icon by Rafiico Creative from Noun Project')]
#[Concept('Cost', 3)]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-svg viewBox="-25.6 -51.2 563.2 691.2" x="85" y="0" height="540" width="440"><g fill="#ffffff"><path d="M283.4271,229.7313h77.1734L292.9675,83.7819A34.9594,34.9594,0,1,0,229.53,113.1808Z"/><path d="M353.2391,151.37l21.2555-58.3938a34.9583,34.9583,0,0,0-63.1171-29.4629,60.4144,60.4144,0,0,1,5.4474,9.252Z"/><path d="M137.8729,343.4963a34.9977,34.9977,0,0,0,35-35v-70a35.006,35.006,0,0,0-38.4394-34.8355c-18.1964,1.7367-31.5606,18.0618-31.5606,36.3415v68.494A35,35,0,0,0,137.8729,343.4963Z"/><path d="M207.9156,325.9813a34.7437,34.7437,0,0,0,16.9745-4.375,60.4826,60.4826,0,0,1-8.2245-30.625,61.3384,61.3384,0,0,1,26.25-50.2249V220.9813a35.0142,35.0142,0,0,0-38.4992-34.8248c-18.2006,1.75-31.5008,18.0255-31.5008,36.3127v68.5121A34.9907,34.9907,0,0,0,207.9156,325.9813Z"/><path d="M374.1271,255.9963h-96.361a34.9842,34.9842,0,0,0-19.2945,5.9131c-29.3646,20.2173-13.5821,64.0335,21.4136,64.0719h50.53c-43.2416-.2371-81.3519,32.81-86.7395,75.9089a13.1613,13.1613,0,0,1-12.984,11.5911c-23.0329-1.836-10.8179-34.9722,1.03-56.0675,2.3157-4.12-1.4056-9.2178-5.9344-7.8773-13.3942,3.9648-28.1812,3.607-40.9045-1.8372-18.3118,23.7165-57.7253,29.3241-82.0057,10.99v37.3071a69.9993,69.9993,0,0,0,70,70h166.25a69.9993,69.9993,0,0,0,70-70v-105A35,35,0,0,0,374.1271,255.9963Z"/></g></x-svg>

<x-card.phaserule type="Resolution" >
    <text >
<x-card.normalrule>If this Monster uses</x-card.normalrule>
<x-card.normalrule>a Defense, add 4 to any roll.</x-card.normalrule>
<x-card.smallrule>(For example, 1d6 becomes 1d10.)</x-card.smallrule>
    </text>
</x-card.phaserule>

HTML;
    }
};
