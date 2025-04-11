<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Benevolence')]
#[Concept('Trait')]
#[Concept('Cost', 2)]
#[ImageCredit('Icon by vecon from the Noun Project')] // https://thenounproject.com/icon/smiley-2896057/
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg x="80"  viewBox="0 0 16.933333 21.166666"  ><g transform="translate(0,-280.06667)" style="" display="inline"><path style="display:inline;opacity:1;vector-effect:none;fill:#ffffff;fill-opacity:1;fill-rule:evenodd;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" d="m 32,1 c -17.120826,2.8e-6 -30.9999972,13.879174 -31,31 2.8e-6,17.120826 13.879174,30.999997 31,31 17.120826,-3e-6 30.999997,-13.879174 31,-31 C 62.999997,14.879174 49.120826,1.0000028 32,1 Z M 16.988281,20 c 0.19186,-9.7e-4 0.39195,0.0452 0.59375,0.189453 l 7,5 c 0.64301,0.45997 0.523273,1.448968 -0.210937,1.742188 l -5,2 c -0.12305,0.0517 -0.249343,0.06856 -0.382813,0.06836 -0.63104,-0.003 -0.996,-0.50028 -1,-1 -0.003,-0.37593 0.197515,-0.753498 0.640625,-0.923828 l 3.300782,-1.320313 -5.511719,-3.9375 C 16.100429,21.591459 15.979281,21.29129 15.988281,21 c 0.016,-0.51984 0.46121,-0.9973 1,-1 z M 47,20 c 0.53879,0.0027 0.984,0.48016 1,1 0.009,0.29129 -0.112146,0.591458 -0.429688,0.818359 l -5.511718,3.9375 3.300781,1.320313 C 45.802485,27.246502 46.003,27.62407 46,28 c -0.0044,0.49972 -0.36896,0.997 -1,1 -0.13347,2e-4 -0.259762,-0.01666 -0.382812,-0.06836 l -5,-2 C 38.882976,26.638421 38.76324,25.649423 39.40625,25.189453 l 7,-5 C 46.60805,20.0452 46.80814,19.99903 47,20 Z M 17.675781,39.957031 c 0.340009,-0.01098 0.662283,0.15163 0.855469,0.431641 3.21922,4.178282 8.19415,6.623448 13.46875,6.623047 5.2746,-3.88e-4 10.248197,-2.448201 13.466797,-6.626953 0.176712,-0.236847 0.449122,-0.38342 0.744141,-0.400391 0.863691,-0.05126 1.380553,0.944092 0.841796,1.621094 -3.5962,4.669003 -9.157371,7.405807 -15.050781,7.40625 -5.8934,4.29e-4 -11.455844,-2.735834 -15.052734,-7.404297 -0.546043,-0.637097 -0.112066,-1.622877 0.726562,-1.650391 z" transform="matrix(0.26458333,0,0,0.26458333,0,280.06667)"/></g></x-card.hero.svg>
<x-card.phaserule type="Resolution" :lines="2">
    <text >
    <x-card.normalrule>Damage done to defender: -Boost</x-card.normalrule>
<x-card.normalrule>Damage prevented: +Boost</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML;
    }
};
