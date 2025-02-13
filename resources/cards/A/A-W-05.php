<?php
return new
    #[\App\GeneralAttributes\Title("Steel Claws")]
    #[\App\Concept('Item')]
    #[\App\Concept("Weapon")]
    #[\App\CardAttributes\ImageCredit("Icon by Skoll on Game-Icons.net")]
    #[\App\CardAttributes\FlavorText([])]
    #[\App\CardAttributes\Prerequisites([])]
    class(__FILE__) implements \App\Contracts\Card\CardComponents {
        use \App\CardAttributes\DefaultCardAttributes;
        public function content(): \Traversable
        {
            yield <<<HTML
<x-card.hero-svg><path d="M20.11 16.705h120.31l300.66 207.21 56.39 134-138.88-96-7.06-16.79zM309 423.295l-56.39-134-238.08-164.09v94.45zm-48.47-146.43l10.79 25.64 128.76 89-56.39-134-329.16-226.8v76.64z" fill="#fff" fill-opacity="1"></path></x-card.hero-svg>
     
<x-card.phaserule type="Attack" height="130">
<text >
<x-card.normalrule>User must be able to wear Steel Claws.</x-card.normalrule>
<x-card.normalrule>Choose one Character with HP.</x-card.normalrule>
<x-card.normalrule>Does Speedx2 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
