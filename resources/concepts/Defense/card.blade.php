@props(['y'=>0])
<?php
global $rules_dy;
$rules_dy ??= 0;

$width = config("card-design.viewbox.width");
$height = config("card-design.concept.standard-height");
?>

<symbol id="Defense-card" width="<?= $width ?>" height="<?= $height ?>" viewBox="0 0 <?= $width ?> <?= $height ?>">

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="50%" />
     <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ view('Defense.icon') }}
     </g>
     <text x="<?= config("card-design.concept.standard-height") ?>" y="30" class="concept-type">Defense</text>
     <text >
<tspan x="65%" dy="30" class="smallrule"  alignment-baseline="baseline">Can be played only as a response to an Attack.</tspan>
     </text>
</symbol>

<use href="#Defense-card" x="0" y="<?= $y+$rules_dy ?>" />

<?php 
$rules_dy += $height; 
    