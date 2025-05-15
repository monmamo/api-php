<?php

use App\CardAttributes\DefaultCardAttributes;
use App\CardAttributes\ImageCredit;
use App\CardAttributes\Prerequisites;
use App\CardAttributes\RaidCardAttributes;
use App\Concept;
use App\Contracts\Card\CardComponents;
use App\GeneralAttributes\Title;

return new
#[Title('Rack of Vials')]
#[Concept('Evidence', 10)]
#[Concept('Cost', 5)]
#[ImageCredit('Image by Caro Asercion on Game-Icons.net')]
#[Prerequisites([])]
class(__FILE__) implements CardComponents
{
    use DefaultCardAttributes;
    use RaidCardAttributes { RaidCardAttributes::system insteadof DefaultCardAttributes; }

    public function content(): \Traversable
    {
        yield <<<'HTML'

<x-card.flavortext>Is that a monster embryo in there? Ugh.</x-card.flavortext>

<x-card.hero.svg viewBox="0 0 512 512">
<path d="M103.8 54.7L103.8 71.4L174.7 71.4L174.7 54.7L103.8 54.7Z" fill="#FF00FF" fill-opacity="1"></path>
<path d="M220.5 54.7L220.5 71.4L291.5 71.4L291.5 54.7L220.5 54.7Z" fill="#FFFF00" fill-opacity="1"></path>
<path d="M337.3 54.7L337.3 71.4L408.2 71.4L408.2 54.7L337.3 54.7Z" fill="#00FFFF" fill-opacity="1"></path>
<path d="M116.8 88.8L116.8 138L161.7 138L161.7 88.8L116.8 88.8Z" fill="#FF00FF" fill-opacity="1"></path>
<path d="M233.5 88.8L233.5 138L278.5 138L278.5 88.8L233.5 88.8Z" fill="#FFFF00" fill-opacity="1"></path>
<path d="M350.3 88.8L350.3 138L395.2 138L395.2 88.8L350.3 88.8Z" fill="#00FFFF" fill-opacity="1"></path>
<path d="M38.47 156.4L38.47 190.8L58.19 190.8L58.19 429L38.47 429L38.47 469L473.5 469L473.5 429L453.8 429L453.8 190.8L473.5 190.8L473.5 156.4L38.47 156.4Z" fill="#ffffff" fill-opacity="1"></path>
<path d="M83.19 190.8L428.8 190.8L428.8 311.6L83.19 311.6L83.19 190.8Z" fill="#ffffff" fill-opacity="1"></path>
<path d="M116.8 209.1L116.8 294.4L161.7 294.4L161.7 209.1L116.8 209.1Z" fill="#ffffff" fill-opacity="1"></path>
<path d="M233.5 209.1L233.5 294.4L278.5 294.4L278.5 209.1L233.5 209.1Z" fill="#ffffff" fill-opacity="1"></path>
<path d="M350.3 209.1L350.3 294.4L395.2 294.4L395.2 209.1L350.3 209.1Z" fill="#ffffff" fill-opacity="1"></path>
<path d="M83.19 335.5L428.8 335.5L428.8 414L83.19 414L83.19 335.5Z" fill="#ffffff" fill-opacity="1"></path>
<path d="M116.8 352.8L116.8 373C116.8 378.9 119.2 384.6 123.4 388.9C127.6 393.1 133.3 395.4 139.3 395.4C145.2 395.4 150.9 393.1 155.1 388.9C159.4 384.6 161.7 378.9 161.7 373L161.7 352.8L116.8 352.8Z" class="selected" fill="#ffffff" fill-opacity="1"></path>
<path d="M233.5 352.8L233.5 373C233.5 378.9 235.9 384.6 240.1 388.9C244.3 393.1 250 395.4 256 395.4C262 395.4 267.7 393.1 271.9 388.9C276.1 384.6 278.5 378.9 278.5 373L278.5 352.8L233.5 352.8Z" fill="#ffffff" fill-opacity="1"></path>
<path d="M350.3 352.8L350.3 373C350.3 378.9 352.6 384.6 356.9 388.9C361.1 393.1 366.8 395.4 372.7 395.4C378.7 395.4 384.4 393.1 388.6 388.9C392.8 384.6 395.2 378.9 395.2 373L395.2 352.8L350.3 352.8Z" fill="#ffffff" fill-opacity="1"></path>
</x-card.hero.svg>


    <x-card.cardrule lines="4">
    <x-card.normalrule>ACQUIRE: +2 Noise.</x-card.normalrule>
    <x-card.normalrule>FRAGILE. If this card appears</x-card.normalrule>
    <x-card.normalrule>in a hand with 2 Stumble cards,</x-card.normalrule>
    <x-card.normalrule>trash this card.</x-card.normalrule>
</x-card.cardrule>
HTML;
    }
};
