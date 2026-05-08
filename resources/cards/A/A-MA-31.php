<?php
return new
#[\App\GeneralAttributes\Title("The Hotshot (Female)")]
#[\App\Concept("Master")]
#[\App\Concept("Female")]
#[\App\CardAttributes\ImageCredit("Image by USER_NAME on SERVICE")]
#[\App\CardAttributes\Prerequisites([])]
class(__FILE__) implements \App\Contracts\Card\CardComponents {use \App\CardAttributes\DefaultCardAttributes;
public function content():\Traversable{yield <<<HTML
HTML;
}};