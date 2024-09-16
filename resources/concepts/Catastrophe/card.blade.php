@props(['y'=>0])
<?php
global $rules_dy;
$rules_dy ??= 0;

$width = config("card-design.viewbox.width");
$height = 100;
?>

<symbol id="Catastrophe-card" width="<?= $width ?>" height="<?= $height ?>" viewBox="0 0 <?= $width ?> <?= $height ?>">

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="50%" />
     <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ view('Catastrophe.icon') }}
     </g>
     <text x="<?= config("card-design.concept.standard-height") ?>" y="30" class="concept-type">Catastrophe</text>
     <text >
        <tspan x="70%" dy="20" class="conceptrule">Only one Catastrophe card</tspan>
        <tspan x="70%" dy="20" class="conceptrule">may be played during any game.</tspan>
        <tspan x="50%" dy="20" class="conceptrule">Must be first card played on the Battlefielder’s turn.</tspan>
<tspan x="50%" dy="20" class="conceptrule">Place this card in the center of the Battlefield.</tspan>
     </text>
</symbol>

<use href="#Catastrophe-card" x="0" y="<?= $y+$rules_dy ?>" />

<?php 
$rules_dy += $height; 
    