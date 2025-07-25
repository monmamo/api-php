@props(['specs'=>null])
<?php
$debug = env('DEBUG') ?? false;
$debug_opacity = match (true) {
    $debug === true => 1,
    $debug === false => 0,
    $debug === 'true' => 1,
    $debug === 'false' => 0,
    default => $debug
};
?>

<style>
    <?= \App\Card\includeFontFace('Roboto-latin-ext') ?><?= \App\Card\includeFontFace('Roboto-latin') ?><?= \App\Card\includeFontFace('Roboto-Condensed-latin-ext') ?><?= \App\Card\includeFontFace('Roboto-Condensed-latin') ?>
    
    text {
        font-family: 'Roboto', sans-serif;
    }

    .narrow-sans-serif {
        font-family: "Roboto Condensed", sans-serif !important; 
    }

    .credit {
        font-style: normal;
        font-size: 20px;
    }

    .flavor {
        font-style: italic;
        font-size: 25px;
        white-space: normal;
    }

    .conceptrule {
        font-style: normal;
        font-size: 20px;
        white-space: normal;
        text-anchor: middle;
        alignment-baseline: middle;
        fill: black;
    }

        .skilltitle {
            font-family: 'Roboto Condensed';
        font-style: normal;
        font-size: 45px;
        text-align: center;
        text-anchor: middle;
        white-space: normal;
        alignment-baseline: top
        fill: black;
    }

    .normalrule {
            font-family: 'Roboto';
        font-style: normal;
        font-size: 30px;
        text-align: center;
        text-anchor: middle;
        white-space: normal;
        alignment-baseline: middle;
        fill: black;
    }

    .smallrule {
            font-family: 'Roboto';
        font-size: 20px;
        font-style: normal;
        white-space: normal;
        text-align: center;
        text-anchor: middle;
        alignment-baseline: middle;
        fill: black;
    }

    .cardtype {
        font-size: 30px;
        font-style: normal;
        fill: black;
    }

    rect.titlebox {
        fill: white;
    }

    image.hero {
        position: relative;
        display: block;
        text-align: center;
        height: 450px;
        width: 610px;
    }

    .standard-background-icon {
        transform: translate(@cardspec(icon.translate.x)px, @cardspec(icon.translate.y)px) scale(@cardspec(icon.scale));
    }

    .debug {
        stroke-opacity: <?= $debug_opacity ?>;
    }

    .info {
        stroke: #ffff00;
    }

    .secondary {
        stroke-dasharray: 1.44;
    }

    g.concept-icon {
        transform: translate(3px, 3px) scale(<?= 64 / 512 ?>);
    }

    g.concept-icon-badge {
        transform: translate(35px, 35px) scale(<?= 32 / 512 ?>);
    }

    text.concept-type {
        font-style: normal;
        font-size: 30px;
        fill: black;
        text-anchor: left;
        alignment-baseline: central;
    }

    g.stat text.gloss {
        font-family: 'Roboto Condensed', sans-serif;
        font-style: normal;
        font-size: 100px;
        fill: #000000;
        paint-order: stroke;
        font-width: 200;
        text-anchor: middle;
        alignment-baseline: baseline;
    }
</style>

<defs>
    <filter x="-5%" y="-5%" width="110%" height="110%" id="solid">
        <feFlood flood-color="white" flood-opacity="85%" result="bg" />
        <feMerge>
            <feMergeNode in="bg" />
            <feMergeNode in="SourceGraphic" />
        </feMerge>
    </filter>

    
    <linearGradient x1="0" x2="1" y1="1" y2="0" id="shadow-gradient-0">
        <stop offset="0%" stop-color="#390303" stop-opacity="1"></stop>
        <stop offset="100%" stop-color="#a10a0a" stop-opacity="1"></stop>
    </linearGradient>

    @foreach($specs??[] as $spec_raw)
    @php
    $spec = \App\Card\make($spec_raw);
    @endphp
    <pattern id="{{$spec->cardNumber()}}-background" viewBox="0 0 @cardspec(width) @cardspec(height)" width="100%" height="100%">
        <?= \App\Strings\render(...$spec->background()) ?>
</pattern>
    @endforeach
</defs>
