@props(['type','y'=>0])

<?php
use Illuminate\Support\Facades\Blade;

$rule_path = resource_path("concepts/$type/standard-rule.txt");
$rule_lines = file_exists($rule_path) ? file($rule_path) : [];
$width = config("card-design.viewbox.width");
$height = max(58,count($rule_lines)*25+25);
?>

<symbol id="<?= $type ?>-card" width="650" height="<?= $height ?>" viewBox="0 0 650 <?= $height ?>">

    <rect width="650" height="<?= $height ?>" fill="#ffffff" fill-opacity="50%" />
     <g transform="translate(2,2) scale(0.10)" fill="#000000" fill-opacity="1">
        {{ view($type.'.icon') }}
     </g>
     <text x="58" y="30" class="cardtype" text-anchor="left" alignment-baseline="central"><?= $type ?></text>
     <text x="325" y="0" text-anchor="right" alignment-baseline="central">
        <?php 
            foreach ($rule_lines as $index => $line) 
            echo Blade::render("@smallrule($line)");
 ?>
        </text>
 </symbol>

 <use href="#<?= $type ?>-card" x="0" y="<?= $y ?>" />