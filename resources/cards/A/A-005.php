<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
    #[Title('Community Center')]
    #[Concept('Facility')]
#[ImageCredit('Icon by Vectors Point from the Noun Project')] // https://thenounproject.com/icon/community-center-architecture-3017456/
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;

    public function content(): \Traversable
    {
        yield <<<'HTML'
<x-card.hero.svg scale="1.5" viewBox="0 0 67 83.75"><g fill="#ffffff"><path d="M64.5,52.37543h-3.25488V27.13422c-17.70947,0-38.96436,0-55.48926,0v25.24121H2.5c-0.55273,0-1,0.44727-1,1    s0.44727,1,1,1h62c0.55273,0,1-0.44727,1-1S65.05273,52.37543,64.5,52.37543z M13.60645,30.01118c0-0.55273,0.44727-1,1-1h0.00098    c20.34326,0,15.34985,0,37.78613,0c0.55273,0,1,0.44727,1,1c0,5.3329,0,17.07078,0,22.36426h-2V36.87641h-9.09473    c0,3.74463,0,11.18799,0,15.49902h-2v-9.93555H34.5v9.93555h-2v-9.93555h-5.79883v9.93555h-2V36.87641h-9.09375v15.49902h-2    C13.60732,50.07614,13.60778,60.65926,13.60645,30.01118z"/><rect x="42.29883" y="31.01117" width="9.09473" height="3.86523"/><path d="M53.69336,23.96528c0-0.0127-0.06641-1.32031-5.80957-2.40918c-3.78516-0.71777-8.89355-1.11328-14.38574-1.11328    c-4.4707,0-20.19531,0.82129-20.19531,3.52246v1.16895h40.39063V23.96528z"/><path d="M52.70313,20.83442v-4.88965c0-0.33691-0.98828-1.39941-5.49902-2.25781c-3.60449-0.68457-8.46973-1.0625-13.70117-1.0625    c-12.78418,0-19.2002,2.12891-19.2002,3.32031v4.88574c5.11621-2.16846,15.35547-2.3877,19.19531-2.3877    C37.34009,18.44282,47.59009,18.6623,52.70313,20.83442z"/><rect x="26.70117" y="31.01117" width="13.59766" height="3.86523"/><rect x="26.70117" y="36.8764" width="13.59766" height="3.56348"/><rect x="15.60742" y="31.01117" width="9.09375" height="3.86523"/></g></x-card.hero.svg>

<x-card.flavortext>Have a hot meal. Hang out with the boys.</x-card.flavortext>

<svg x="402px" y="322px" height="128px" width="128px" viewBox="0 0 512 512">{{view('Mobster.ban-icon')}}</svg>

<x-card.cardrule :lines="2">
<x-card.normalrule>No Mobsters are allowed on the Battlefield.</x-card.normalrule>
<x-card.normalrule>Discard all Mobsters from the Battlefield.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
