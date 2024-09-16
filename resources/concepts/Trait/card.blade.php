@props(['y'=>0])
<?php
global $rules_dy;
$rules_dy ??= 0;

$width = config("card-design.viewbox.width");
$height = 75;
?>

<symbol id="Trait-card" width="<?= $width ?>" height="<?= $height ?>" viewBox="0 0 <?= $width ?> <?= $height ?>">

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="50%" />
     <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ view('Trait.icon') }}
     </g>
     <text x="<?= config("card-design.concept.standard-height") ?>" y="30" class="concept-type">Trait</text>
     <text >
<tspan x="57.5%" dy="20" class="conceptrule">This card can be attached to a Monster card</tspan>
<tspan x="57.5%" dy="20" class="conceptrule">only when a Monster enters the Battlefield.</tspan>
<tspan x="57.5%" dy="20" class="conceptrule">A Monster may have only one of any particular Trait card.</tspan>
     </text>
</symbol>

<use href="#Trait-card" x="0" y="<?= $y+$rules_dy ?>" />

<?php 
$rules_dy += $height; 
    