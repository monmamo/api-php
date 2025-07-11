<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Dodge')]
    #[Concept('Defense')]
    #[Concept('Physical')]
    #[Concept('Level', 0)]
    #[ImageCredit('Icon by Rflor via The Noun Project')]

    // icon is 28 => 650x450
    class(__FILE__) implements CardComponents
    {
        use DefaultCardAttributes;

        public function content(): \Traversable
        {
            yield <<<'HTML'

<x-card.hero.svg viewBox="0 0 128 160"><g fill="white"><path d="M54.93,95.969c-6.316-4.994-12.281-9.703-12.531-19.689c-0.057-12.543,5.84-17.654,11.546-22.595   c2.679-2.32,5.212-4.514,6.879-7.373c3.599-6.163,3.143-15.903,2.953-18.461l10.951,4.854c2.375,1.052,3.262,0.01,1.977-2.313   L61.341,2.743c-1.292-2.324-3.405-2.324-4.697,0L41.297,30.391c-1.292,2.323-0.414,3.338,1.946,2.255l10.26-4.703   c0.006,0.118-0.045,0.223-0.033,0.341c0.321,3.468,0.083,9.829-1.458,12.471c-0.777,1.331-2.667,2.967-4.667,4.699   c-6.108,5.291-15.335,13.283-15.252,30.985c0.378,15.247,9.754,22.648,16.6,28.057c2.89,2.283,5.617,4.437,6.87,6.546l0.628,0.854   c2.637,2.915,3.724,8.428,3.917,10.29c0.273,2.761,2.512,4.813,5.123,4.813c0.173,0,0.351-0.012,0.529-0.03   c2.834-0.297,4.894-2.927,4.602-5.872c-0.101-1.027-1.125-10.062-6.307-16.138C61.796,101.39,58.457,98.754,54.93,95.969z"/><path d="M77.78,60.067c-10.007,0-18.121,6.318-18.121,14.108c0,7.791,8.114,14.109,18.121,14.109   c10.013,0,18.127-6.318,18.127-14.109C95.907,66.385,87.793,60.067,77.78,60.067z"/></g></x-card.hero.svg>

<x-card.cardrule y="560" >
<x-card.ruleline>Innate. Any card with a</x-card.ruleline>
<x-card.ruleline>Speed stat can use Dodge.</x-card.ruleline>
        </x-card.cardrule>

<x-card.phaserule type="Resolution" ><text>
<x-card.ruleline x="55%">Prevents Speed @damage.</x-card.ruleline>
</text></x-card.phaserule>
HTML;
        }
    };
