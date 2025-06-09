@props(['type','y'=>null,'height'=>30,'lines'=>5,'repeat'=>false,'badge'=>null])
<?php

use Illuminate\View\ComponentSlot;
use Illuminate\Support\Facades\Blade;

$make_content = function ($content):string {
    $tspans = [];
    foreach (\App\Strings\explode_lines($content) as $content_line) {
        $content_line = trim($content_line);
        if ($content_line === '') continue;
        $tspans[] = "<x-card.ruleline>$content_line</x-card.ruleline>";
    }
    return Blade::render(\App\Strings\html('text', [], $tspans));
};

$slot_html = trim($slot->toHtml());

$content = match (true) {
    $slot_html === '' =>  $make_content($lines),
    $slot_html[0] === '<' => $slot_html,
    default => $make_content($slot_html)
};

$height += match (true) {
    is_array($lines) => count($lines),
    is_int($lines) => $lines,
    is_string($lines) => is_numeric($lines) ? (int)$lines : substr_count($lines, "\n") + 1,
    is_null($lines) => 0,
} * 35;
$y ??= config("card-design.titlebox.y") - $height - 85;
$concept = \App\Concept::make($type);
?>

<svg id="{{$type}}-phaserule" x="0" y="<?= $y ?>" width="<?= config("card-design.viewbox.width") ?>" height="<?= $height ?>" viewBox="0 0 <?= config("card-design.viewbox.width") ?> <?= $height ?>">
<defs>
    <x-svg.filters.icon-overlay-shadow />
</defs>

    <rect width="100%" height="100%" fill="#ffffff" fill-opacity="100%" />
    <g class="concept-icon" fill="#000000" fill-opacity="1">
        {{ $concept->icon() }}
    </g>
    @isset($badge)
    <g class="concept-icon-badge" fill="#000000" fill-opacity="1" filter="url(#icon-overlay-shadow)">
        {{ view($badge.'.icon') }}
    </g>
    @endisset
    <?= $content ?>
</svg>
