@props(['abreast'=>3,'cards'])
<?php
$deck = new \App\Deck($cards);

$dx = 0;
$dy = 0;
$padding_inches = 0.5/3; //20;
$padding = $padding_inches * config('card-design.dots_per_inch');

$rows = ceil(count($cards) / $abreast);
$sheets = ceil($rows / 3);

$viewbox_width = $abreast * (config('card-design.width') +  $padding);
$viewbox_height = $rows * (config('card-design.height') +  $padding);

?>
<svg 
width="<?= $viewbox_width / config('card-design.dots_per_inch') ?>in" 
height="<?= $viewbox_height / config('card-design.dots_per_inch') ?>in" 
viewBox="0 0 <?= $viewbox_width ?> <?= $viewbox_height ?>" xmlns="http://www.w3.org/2000/svg">

<x-card.common :specs="$distinct_cards" />

<?php
foreach ($cards as $index => $cardNumber) {
    $dx = $index % $abreast;
    $dy = floor($index / $abreast);
?>
    <x-card :$cardNumber :$dx :$dy :omit-common="true" :$padding />
<?php
}
?>

</svg>
<x-svg-context-menu />
