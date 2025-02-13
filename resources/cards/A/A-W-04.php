<?php
return new
    #[\App\GeneralAttributes\Title("Bowie Knife")]
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
<x-card.hero-svg><path d="M416.833 424.997a51.536 51.536 0 0 0-13.354 22.973l-78.98-78.98 44.972-44.97 78.98 78.978a51.536 51.536 0 0 0-22.974 13.354zm-209.087-202.24l-86.28-97.65 97.653 86.277 90.77 80.19 14.927-14.927c-90.534-99.383-137.713-167.87-176.19-212.085 0 0-39.608 13.795-122.627-38.08 0 0 7.062 120.442 252.034 296.948l9.913-9.913zm155.22 82.16a14.43 14.43 0 0 0-20.37-20.37l-57.57 57.567a14.43 14.43 0 0 0 20.37 20.37zM486 429.15a33.746 33.746 0 0 0-47.722 0l-8.646 8.647a33.746 33.746 0 0 0 0 47.722z" fill="#fff" fill-opacity="1"></path></x-card.hero-svg>
     
<x-card.phaserule type="Attack" height="130">
<text >
<x-card.normalrule>Choose one Character with HP.</x-card.normalrule>
<x-card.normalrule>Does 2+1d6 @damage.</x-card.normalrule>
</text>
</x-card.phaserule>
HTML;
        }
    };
