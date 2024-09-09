
@props(['cardType'=>null,'cardName'=>null,'transparent_name_background'=>false])

<?php
$has_icon = \Illuminate\Support\Facades\View::exists($cardType . '.icon');
$text_x =  config('card-design.titlebox.text_x')($has_icon) ;
//<line x1="0" y1="0" x2="650" y2="70" stroke="yellow" stroke-width="2" />
//<line x1="0" y1="70" x2="650" y2="140" stroke="yellow" stroke-width="2" />
?>

<x-card.box slug="titlebox" >


    @if ($has_icon)    
<x-card.titlebox.icon :$cardType />
    @endif
    
    <text x="<?= $text_x ?>" y="@titleboxspec(cardtype-baseline)" text-anchor="middle" class="cardtype" alignment-baseline="hanging"><?= \strtoupper($cardType) ?></text>
    <text x="<?= $text_x ?>" y="@titleboxspec(cardname-baseline)" text-anchor="middle" class="cardname" alignment-baseline="baseline"><?=  $cardName ?></text>
</x-card.box >
