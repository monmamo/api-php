<?php
return new
#[\App\GeneralAttributes\Title("Barrow")]
#[\App\CardAttributes\ImageCredit("")]
#[\App\Concept('Place')]
#[\App\CardAttributes\FlavorText(["A cavern with primarily earthen ruins below the surface of a mound, hill or mountain where ancient rulers and warriors would be laid to rest."])]
#[\App\CardAttributes\LocalHeroImage("TODO.png")]
#[\App\CardAttributes\Prerequisites([])]
class implements \App\Contracts\Card\CardComponents {use \App\CardAttributes\DefaultCardAttributes;
public function content():\Traversable{yield <<<HTML
<x-card.cardrule height="0" >
<x-card.normalrule>TODO</x-card.normalrule>
</x-card.cardrule>
HTML;
}};