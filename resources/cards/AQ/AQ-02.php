<?php
return new
#[\App\GeneralAttributes\Title("Sprinkler System")]
#[\App\Concept("Upkeep")]
#[\App\CardAttributes\ImageCredit("")]
#[\App\CardAttributes\FlavorText([])]
#[\App\CardAttributes\LocalHeroImage("TODO.png")]
#[\App\CardAttributes\Prerequisites([])]
class implements \App\Contracts\Card\CardComponents {use \App\CardAttributes\DefaultCardAttributes;
public function content():\Traversable{yield <<<HTML
<x-card.cardrule height="40" >
<x-card.smallrule>Discard all Fire and Fire-type cards on the Battlefield.</x-card.smallrule>
</x-card.cardrule>
HTML;
}};