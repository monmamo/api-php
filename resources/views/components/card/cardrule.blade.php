@props(['y'=>null,'height'=>30,'lines'=>5,'repeat'=>false,'backgroundOpacity'=>1])
<?php
$height += $lines*35;
$y ??= config("card-design.titlebox.y")-$height-85;
?>

<svg  x="0" y="<?= $y ?>" width="<?=  config("card-design.viewbox.width") ?>" height="<?= $height ?>" viewBox="0 0 <?= config("card-design.viewbox.width") ?> <?= $height ?>">
    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="100%" />
    <text>
     {{$slot}}
    </text>
</svg>