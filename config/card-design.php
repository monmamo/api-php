<?php
// Don't define rulebox in here! Rulebox is dependent on actual content.

$icon_size = 512;

$width = 750;
$height = 1050;
$margin = 50;

$primary_rule_height = 35;
$secondary_rule_height = 25;

$icon = [
    'size' => $icon_size,
    'scale' => $height / $icon_size,
    'translate' => ['x' => ($width - $height) / 2, 'y' => 0],
];

$viewbox_width = $width - $margin - $margin;
$viewbox_height = $height - $margin - $margin;

$viewbox = [
    'width' => $viewbox_width,
    'height' => $viewbox_height,
];

$titlebox_height = 80;
$titlebox_cardtype_baseline = 30;
$titlebox_cardname_baseline = $titlebox_height - $titlebox_cardtype_baseline;

$titlebox = [
    'x' => $margin,
    'y' => $height - $titlebox_height - $margin,
    'height' => $titlebox_height,
    'width' => $viewbox['width'],
    'cardtype-baseline' => $titlebox_cardtype_baseline,
    'cardname-baseline' => $titlebox_cardname_baseline,
    'text_x' => fn(bool $has_icon) => $viewbox['width'] / 2 + ($has_icon ? $titlebox_height / 2 : 0)
];

$hero_width = $viewbox['width'];
$hero_height = 450;

$hero = [
    'width' => $hero_width,
    'height' => $hero_height,
    'icon' => [
        'scale' => $hero_height / $icon_size,
        'translate' => ['x' => ($hero_width - $hero_height) / 2, 'y' => 0],
    ]
];

$bodytext = [
    'line-height' => $primary_rule_height,
    'y' => $hero_height + 50,
    'width' => $viewbox['width'],
    'height' => $viewbox_height - $titlebox_height + $margin - $hero_height
];

return compact('height', 'width', 'margin', 'icon', 'viewbox', 'titlebox', 'bodytext', 'hero','primary_rule_height','secondary_rule_height');

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
    'CARD_BORDER_WIDTH'
];
