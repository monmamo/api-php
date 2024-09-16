<?php

// Don't define rulebox in here! Rulebox is dependent on actual content.

$icon_size = 512;

$width = 750;
$height = 1050;

$primary_rule_height = 35;
$secondary_rule_height = 25;

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

$titlebox = [
    'x' => $viewbox['x'],
    'width' => $viewbox['width'],
    'height' => 80,
    'cardtype_baseline' => 30,
];

$titlebox['cardname_baseline'] = $titlebox['height'] - $titlebox['cardtype_baseline'];

$titlebox['y'] = $viewbox['y'] + $viewbox['height'] - $titlebox['height'];
$titlebox['text_x'] = fn (bool $has_icon) => $viewbox['width'] / 2 + ($has_icon ? $titlebox['height'] / 2 : 0);

$hero_width = $viewbox['width'];
$hero_height = 450;

$hero = [
    'width' => $hero_width,
    'height' => $hero_height,
    'icon' => [
        'scale' => $hero_height / $icon_size,
        'translate' => ['x' => ($hero_width - $hero_height) / 2, 'y' => 0],
    ],
];

$concept_icon_height = 54;
$concept_icon_padding = 2;

$concept = [
    'icon-size' => $concept_icon_height,
    'icon-padding' => $concept_icon_padding,
    'standard-height' => $concept_icon_height + $concept_icon_padding * 2,
];

return \compact('height', 'width', 'icon', 'trimbox', 'viewbox', 'titlebox', 'hero', 'primary_rule_height', 'secondary_rule_height', 'concept');
[
    'CARD_TITLE_FONT_SIZE' => 48,
    'CARD_TITLE_FONT_COLOR' => '#000000',
    'CARD_TITLE_FONT_FAMILY' => 'Arial',
    'CARD_TITLE_FONT_WEIGHT' => 'bold',
    'CARD_TITLE_FONT_ALIGN' => 'center',
    'CARD_TITLE_FONT_LINE_HEIGHT' => 1.5,
    'CARD_TITLE_FONT_MARGIN_TOP' => 0,
    'CARD_TITLE_FONT_MARGIN_BOTTOM' => 0,

    'CARD_BODY_FONT_SIZE' => 24,
    'CARD_BODY_FONT_COLOR' => '#000000',
    'CARD_BODY_FONT_FAMILY' => 'Arial',
    'CARD_BODY_FONT_WEIGHT' => 'normal',
    'CARD_BODY_FONT_ALIGN' => 'left',
    'CARD_BODY_FONT_LINE_HEIGHT' => 1.5,
    'CARD_BODY_FONT_MARGIN_TOP' => 0,
    'CARD_BODY_FONT_MARGIN_BOTTOM' => 0,

    'CARD_ICON_MARGIN_TOP' => 0,
    'CARD_ICON_MARGIN_BOTTOM' => 0,
    'CARD_ICON_MARGIN_LEFT' => 0,
    'CARD_ICON_MARGIN_RIGHT' => 0,

    'CARD_ICON_BORDER_RADIUS' => 0,
    'CARD_ICON_BORDER_WIDTH' => 0,
    'CARD_ICON_BORDER_COLOR' => '#000000',

    'CARD_ICON_BACKGROUND_COLOR' => '#FFFFFF',

    'CARD_TITLEBOX_BACKGROUND_COLOR' => '#FFFFFF',
    'CARD_TITLEBOX_BORDER_RADIUS' => 0,
    'CARD_TITLEBOX_BORDER_WIDTH' => 0,
    'CARD_TITLEBOX_BORDER_COLOR' => '#000000',

    'CARD_BODYBOX_BACKGROUND_COLOR' => '#FFFFFF',
    'CARD_BODYBOX_BORDER_RADIUS' => 0,
    'CARD_BODYBOX_BORDER_WIDTH' => 0,
    'CARD_BODYBOX_BORDER_COLOR' => '#000000',

    'CARD_BACKGROUND_COLOR' => '#FFFFFF',
    'CARD_BORDER_RADIUS' => 0,
    'CARD_BORDER_WIDTH',
];
