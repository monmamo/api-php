@props(['type','y'=>0,'index'=>0])

<?php
use Illuminate\Support\Facades\Blade;

$icon_height = 54;
$icon_padding = 2;

$rule_path = resource_path("concepts/$type/standard-rule.txt");
$rule_lines = file_exists($rule_path) ? file($rule_path) : [];
$width = config("card-design.viewbox.width");
$height = max($icon_height+$icon_padding*2,count($rule_lines)*25+25);
?>

<symbol id="<?= $type ?>-card" width="<?= $width ?>" height="<?= $height ?>" viewBox="0 0 <?= $width ?> <?= $height ?>">

    <rect width="<?= $width ?>" height="<?= $height ?>" fill="#ffffff" fill-opacity="50%" />
     <g transform="translate(<?= $icon_padding ?>,<?= $icon_padding ?>) scale(<?= $icon_height/512 ?>)" fill="#000000" fill-opacity="1">
        {{ view($type.'.icon') }}
     </g>
     <text x="58" y="30" class="cardtype" text-anchor="left" alignment-baseline="central"><?= $type ?> {{ $slot }}</text>
     <text x="395" y="0" text-anchor="right" alignment-baseline="central">
        <?php 
            foreach ($rule_lines as $line) 
            echo  Blade::render("@smallrule($line)");
 ?>
        </text>
 </symbol>

 <use href="#<?= $type ?>-card" x="0" y="<?= $y+$index*60 ?>" />