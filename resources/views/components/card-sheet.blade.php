@props(['abreast'=>3,'cards','distinct'=>false])
<?php
$deck =  \App\Deck::fromAnything($cards);

$dx = 0;
$dy = 0;
$padding_inches = 0.5/3; //20;
$padding = $padding_inches * config('card-design.dots_per_inch');

$rows = ceil($deck->count() / $abreast);
$sheets = ceil($rows / 3);

$viewbox_width = $abreast * (config('card-design.width') +  $padding);
$viewbox_height = $rows * (config('card-design.height') +  $padding);

?>
<svg 
width="<?= $viewbox_width / config('card-design.dots_per_inch') ?>in" 
height="<?= $viewbox_height / config('card-design.dots_per_inch') ?>in" 
viewBox="0 0 <?= $viewbox_width ?> <?= $viewbox_height ?>" xmlns="http://www.w3.org/2000/svg">

<x-card.common :specs="$deck->distinctCards()" />

<?php
foreach ($distinct ? $deck->distinctCards():$deck->individualCards() as $index => $cardNumber) {
    if (!is_int($index)) dd($index);
    $dx = $index % $abreast;
    $dy = floor($index / $abreast);
?>
    <x-card :$cardNumber :$dx :$dy :omit-common="true" :$padding />
<?php
}
?>

</svg>
<x-svg-context-menu />
