<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}


?>

<svg width="800" height="800" viewBox="0 0 10 10" xmlns="http://www.w3.org/10/svg">

    <style>
        <?= \App\Card\includeFontFace('Roboto-latin-ext') ?>
        <?= \App\Card\includeFontFace('Roboto-latin') ?>
        <?= \App\Card\includeFontFace('Roboto-Condensed-latin-ext') ?>
        <?= \App\Card\includeFontFace('Roboto-Condensed-latin') ?>
        
.gridline {
    stroke: black;
    stroke-width: 0.01;
    stroke-opacity: 1;
}

.league {
    stroke: black;
    stroke-width: 0.05;
    fill-opacity: 1;
}

.league-label {
    font-family:'Roboto',sans-serif;
    fill:black;
    fill-opacity: 0.4;
    //stroke: white;
    //stroke-width:0.025;
     alignment-baseline:middle;
    text-anchor:middle;
    font-size: 0.75px;
}
    </style>

    <rect x="0" y="0" width="10" height="1"  class="league" fill="gold" />
    <rect x="0" y="1" width="10" height="2" class="league"  fill="#c0c0c0" />
    <rect x="0" y="3" width="10" height="3" class="league"  fill="#6E4D25" />
    <rect x="0" y="6" width="10" height="4" class="league"  fill="white" />
    

<circle cx="0.5" cy="0.5" r="0.5" class="league" fill-opacity="0" />
<circle cx="0.5" cy="7.5" r="0.5" class="league" fill-opacity="0" />

<?php
for($n = 1; $n <= 100; $n += 1) {

    
$u = ($n-1) % 10;
$t = floor(($n-1) / 10);

    $x = match($t%2){
        0 => $u + 0.5,
        1 => 9.5 - $u,
    };
    $y = 9.5-$t;

    ?>
    <text x="<?= $x ?>" y="<?= $y ?>" class="narrow-sans-serif" font-size="0.6px" fill="#888888" fill-opacity="1" alignment-baseline="middle" text-anchor="middle"><?= $n ?></text>
<? } ?>

<text x="5" y="0.5"  class="league-label" xfill="gold">Championship League</text>
<text x="5" y="2" class="league-label" xfill="#c0c0c0">Elite League</text>
<text x="5" y="4.5" class="league-label" xfill="#6E4D25">Pro League</text>
<text x="5" y="8" class="league-label" xfill="white">Amateur League</text>
</svg>
