<?php
return new
#[\App\GeneralAttributes\Title("The Sentinel (Male)")]
#[\App\Concept("Master")]
#[\App\Concept("Male")]
    #[\App\Concept('DamageCapacity', 12)]
    #[\App\Concept('Size', '4')]
    #[\App\Concept('Speed', '4')]
    #[\App\Concept('Training', 5)]
    class(__FILE__) implements \App\Contracts\Card\CardComponents {
        use \App\CardAttributes\DefaultCardAttributes;
        use App\CardAttributes\CardTools;
        public function content(): \Traversable
        {
            yield <<<HTML
<x-card.cardrule lines="1" >
<x-card.ruleline>Limit 1 Master per player on Battlefield.</x-card.ruleline>
</x-card.cardrule>
HTML;
        }
    };
