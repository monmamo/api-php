<?php
return new
#[\App\GeneralAttributes\Title("Fortress")]
#[\App\CardAttributes\ImageCredit("")]
#[\App\CardAttributes\FlavorText([])]
#[\App\CardAttributes\LocalHeroImage("TODO.png")]
#[\App\CardAttributes\Prerequisites([])]
class implements \App\Contracts\Card\CardComponents {use \App\CardAttributes\DefaultCardAttributes;
public function content():\Traversable{yield <<<HTML
<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
}};