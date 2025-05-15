<?php

// Don't define rulebox in here! Rulebox is dependent on actual content.

$icon_size = 512;

$dots_per_inch = 300;

$width_inches = 2.5;
$height_inches = 3.5;
$physical = ['unit' => 'in', 'width' => $width_inches, 'height' => $height_inches];

$width = $dots_per_inch * $width_inches;
$height = $dots_per_inch * $height_inches;

$primary_rule_height = 35;
$secondary_rule_height = 30;

$icon = [
    'size' => $icon_size,
    'scale' => $height / $icon_size,
    'translate' => ['x' => ($width - $height) / 2, 'y' => 0],
];

// This is the actual cutline of your final design.
$trimbox = ['margin' => 35];
$trimbox['x'] = $trimbox['y'] = $trimbox['margin'];
$trimbox['width'] = $width - $trimbox['margin'] - $trimbox['margin'];
$trimbox['height'] = $height - $trimbox['margin'] - $trimbox['margin'];

// DO NOT place ANY important text/images beyond the viewbox. Anything past the viewbox could be trimmed.
$viewbox = ['margin' => 35];
$viewbox['x'] = $viewbox['y'] = $trimbox['x'] + $viewbox['margin'];
$viewbox['width'] = $trimbox['width'] - $trimbox['margin'] - $trimbox['margin'];
$viewbox['height'] = $trimbox['height'] - $trimbox['margin'] - $trimbox['margin'];

// The titlebox is at the bottom of the viewbox.

$concept_icon_height = 80;
$concept_icon_padding = 2;
$concept_box_height = $concept_icon_height * 1.25;

$title_height = 70;

$titlebox = [
    'x' => $viewbox['x'],
    'width' => $viewbox['width'],
    'height' => $concept_box_height,
    'cardtype_baseline' => 30,
];

$titlebox['cardname_baseline'] = $titlebox['height'] - $titlebox['cardtype_baseline'];

$titlebox['y'] = $viewbox['y'] + $viewbox['height'] - $titlebox['height'];

$hero_width = $viewbox['width'];
$hero_height = 450;

$hero = [
    'x' => 0,
    'y' => $title_height, // $viewbox['y'],
    'width' => $hero_width,
    'height' => $hero_height,
    'icon' => [
        'scale' => $hero_height / $icon_size,
        'translate' => ['x' => ($hero_width - $hero_height) / 2, 'y' => 0],
    ],
];

$concept = [
    'icon-size' => $concept_icon_height,
    'icon-padding' => $concept_icon_padding,
    'box-height' => $concept_box_height,
    'standard-height' => $concept_icon_height + $concept_icon_padding * 2,
    'baseline' => $titlebox['y'] + $concept_box_height,
    'topline' => $titlebox['y'],
];

return \compact('dots_per_inch', 'physical', 'height', 'width', 'icon', 'trimbox', 'viewbox', 'titlebox', 'hero', 'primary_rule_height', 'secondary_rule_height', 'concept');
