@props(['abreast'=>3,'cards','distinct_cards'])
<?php
$distinct_cards ??= $cards;
$dx = 0;
$dy = 0;
$padding = 20;

$rows = ceil(count($cards) / $abreast);
$sheets = ceil($rows / 3);
$physical = config('card-design.physical');
?>
<svg 
width="8.25in" 
height="<?= $sheets * 11.25 ?>in" 
viewBox="0 0 <?= $abreast * (config('card-design.width')+2*$padding) ?> <?= $rows * (config('card-design.height')+2*$padding) ?>" xmlns="http://www.w3.org/2000/svg">

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
