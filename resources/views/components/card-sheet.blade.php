@props(['abreast'=>3,'cards','distinct_cards'])
<?php
$distinct_cards ??= $cards;
$dx = 0;
$dy = 0;

$rows = ceil(count($cards) / $abreast);
$physical = config('card-design.physical');
?>
<svg width="<?= $abreast * $physical['width'] ?><?= $physical['unit'] ?>" height="<?= $rows * $physical['height'] ?><?= $physical['unit'] ?>" viewBox="0 0 <?= $abreast * config('card-design.width') ?> <?= $rows * config('card-design.height') ?>" xmlns="http://www.w3.org/2000/svg">

    <x-card.common :specs="$distinct_cards" />

    <?php
    foreach ($cards as $index => $cardNumber) {
        $dx = $index % $abreast;
        $dy = floor($index / $abreast);
    ?>
        <x-card :$cardNumber :$dx :$dy :omit-common="true" />
    <?php
    }
    ?>
</svg>
