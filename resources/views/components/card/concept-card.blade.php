@props(['type','x'=>null,'y'=>0,'width'=>null,'index'=>0,'rule'=>null])

<?php
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

global $rules_dy;
$rules_dy ??= 0;

if (View::exists("$type.card")) {
    echo View::make("$type.card",compact('y','rule'));
} else {

    $concept = \App\Concept::make($type);
    $rule_path = \App\Concept::disk()->path("$type/standard-rule.txt");
$rule_lines = file_exists($rule_path) ? file($rule_path) : [];
$width ??= config("card-design.viewbox.width");
$height = max(config("card-design.concept.standard-height"),count($rule_lines)*25+25);
?>

<symbol id="<?= $type ?>-card" width="<?= $width ?>" height="<?= $height ?>" viewBox="0 0 <?= $width ?> <?= $height ?>">

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="50%" />
     <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ $concept->icon() }}
     </g>
     <text x="<?= config("card-design.concept.standard-height") ?>" y="30" class="concept-type"><?= $type ?> {{ $slot }}</text>
     <text >
        <?php foreach ($rule_lines as $line) { ?>
         <tspan x="60%" dy="20" class="smallrule"  alignment-baseline="baseline"><?= $line ?></tspan>
<?php } ?>
        </text>
</symbol>

<use href="#<?= $type ?>-card" x="<?= $x ?? 0 ?>" y="<?= $y+$index*60+$rules_dy ?>" />

<?php
if (is_null($x))
$rules_dy += $height;
}
 ?>
