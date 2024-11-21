@props(['y'=>0])
<?php
global $rules_dy;
$rules_dy ??= 0;

$width = config("card-design.viewbox.width");
$row_height = config("card-design.concept.standard-height") ;
?>

<x-card.concept.icon-symbol type="Drone" />
<x-card.concept.icon-symbol type="Item" />

<svg id="Drone-card" x="0" y="<?= $y+$rules_dy ?>" width="<?= $width ?>" height="<?= $row_height*2 ?>" viewBox="0 0 <?= $width ?> <?= $row_height*2 ?>">
     
   <rect width="100%" height="100%" fill="#ffffff" fill-opacity="50%" />
   <use href="#Drone-icon" x="0" y="0" />
    <text x="<?= $row_height ?>" y="30" class="concept-type">Drone</text>
    <text >
       <tspan x="62%" dy="20" class="conceptrule">While on the Battlefield, counts as a Flying Monster.</tspan>
       <tspan x="62%" dy="20" class="conceptrule">Cannot attack. Can use Dodge.</tspan>
    </text>
    <use href="#Item-icon" x="0" y="<?= $row_height ?>" />
    <text x="<?= $row_height ?>" y="<?= $row_height+30 ?>" class="concept-type">Item</text>

</svg>

<?php 
$rules_dy += $row_height*2; 
    