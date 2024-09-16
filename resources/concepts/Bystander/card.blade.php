@props(['y'=>0])
<?php
global $rules_dy;
$rules_dy ??= 0;

$width = config("card-design.viewbox.width");
$height =  config("card-design.concept.standard-height");
?>

<symbol id="Bystander-card" width="<?= $width ?>" height="<?= $height ?>" viewBox="0 0 <?= $width ?> <?= $height ?>">

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="50%" />
     <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ view('Bystander.icon') }}
     </g>
     <text x="<?= config("card-design.concept.standard-height") ?>" y="30" class="concept-type">Bystander</text>
     <text >
        <tspan x="70%" dy="20" class="conceptrule">Can be replaced with a Mobster card</tspan>
        <tspan x="70%" dy="20" class="conceptrule">with the same name.</tspan>
     </text>
</symbol>

<use href="#Bystander-card" x="0" y="<?= $y+$rules_dy ?>" />

<?php 
$rules_dy += $height; 
    