@props(['y'=>null,'height'=>30,'lines'=>0,'repeat'=>false,'backgroundOpacity'=>1])
<?php
$height += $lines*35;
$y ??= config("card-design.titlebox.y")-$height-85;
?>

<svg  x="0" y="<?= $y ?>" width="<?=  config("card-design.viewbox.width") ?>" height="<?= $height ?>" viewBox="0 0 <?= config("card-design.viewbox.width") ?> <?= $height ?>">
    <text  filter="url(#solid)" >
     {{$slot}}
    </text>
</svg>