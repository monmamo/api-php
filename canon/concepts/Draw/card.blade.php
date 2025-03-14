<?php
global $rules_dy;
$rules_dy ??= 0;

$width = config("card-design.viewbox.width");
$height =  config("card-design.concept.standard-height");
?>

<symbol id="Draw-card" width="<?= $width ?>" height="<?= $height ?>" viewBox="0 0 <?= $width ?> <?= $height ?>">

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="50%" />
     <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ view('Draw.icon') }}
     </g>
     <text x="<?= config("card-design.concept.standard-height") ?>" y="30" class="concept-type">Draw</text>
     <text >
        @empty($rule)
        <tspan x="70%" dy="30" class="conceptrule"><?= \App\Concept::disk()->get('Draw/standard-rule.txt') ?></tspan>
        @endempty
        @isset($rule)
        {{ $rule }}
        @endisset
     </text>
</symbol>

<use href="#Draw-card" x="0" y="<?= $y+$rules_dy ?>" />

<?php
$rules_dy += $height;
