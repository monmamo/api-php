<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\CardAttributes\RaidCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Pedigree Ledger')]
#[Concept('Evidence', 12)]
#[Concept('Cost', 8)]

#[ImageCredit('Image by Willdabeast on Game-Icons.net')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;
    use RaidCardAttributes { RaidCardAttributes::system insteadof DefaultCardAttributes; }

    public function content(): \Traversable
    {
        yield <<<'HTML'

<x-card.flavortext>
<x-card.flavortext.line>A heavy, encrypted book of bloodlines,</x-card.flavortext.line>
<x-card.flavortext.line>breeding records, black market sales,</x-card.flavortext.line>
<x-card.flavortext.line>and fighting stats.</x-card.flavortext.line>
</x-card.flavortext>

<x-card.hero.svg viewBox="0 0 512 512">
    <path d="M102.5 26.03L192.53 371.78L481.75 395.03L391.687 49.28L102.5 26.03Z" class="selected" fill="#ffffff" fill-opacity="1"></path>
<path d="M83.594 27.594C53.128 39.467 27.914 80.692 33.844 102.906L37.094 114.686C37.761 112.926 38.454 111.164 39.187 109.406C49.097 85.7 65.748 62.64 89.564 50.5L83.594 27.594Z" class="" fill="#ffffff" fill-opacity="1"></path>
<path d="M94.438 69.187C77.781 79.199 64.518 97.264 56.438 116.594C51.191 129.144 48.4 142.224 47.688 153.124L112.5 388.407C112.794 387.857 113.072 387.301 113.375 386.751C123.978 367.499 141.198 349.056 164.5 338.281L94.437 69.19Z" class="" fill="#ffffff" fill-opacity="1"></path>
<path d="M169.312 356.781C151.635 365.859 138.167 380.498 129.75 395.781C125.286 403.888 122.48 412.145 121.062 419.531L132.75 461.939L134.375 462.064C130.535 434.516 145.727 401.56 175.625 380.97L169.312 356.78Z" class="" fill="#ffffff" fill-opacity="1"></path>
<path d="M195.656 390.781C163.089 408.051 149.146 443.221 153.812 463.721L443.656 488.221C438.316 480.431 434.983 470.274 435.062 459.721L412.656 450.721L459 443.436L445.5 430.561C451.104 423.644 459.207 417.511 470.313 412.874L195.656 390.78Z" class="" fill="#ffffff" fill-opacity="1"></path>
</x-card.hero.svg>

HTML;
    }
};
