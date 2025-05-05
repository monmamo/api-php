<?php
if (\App\Facades\Environment::is(\App\Enums\Environments::Production)) {
    abort(404);
}


?>
<!DOCTYPE html>
<html lang="en">

<svg class="has-context-menu" width="800" height="800" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">

    <style>
        <?= \App\Card\includeFontFace('Roboto-latin-ext') ?>
        <?= \App\Card\includeFontFace('Roboto-latin') ?>
        <?= \App\Card\includeFontFace('Roboto-Condensed-latin-ext') ?>
        <?= \App\Card\includeFontFace('Roboto-Condensed-latin') ?>
           
.wall {
    stroke: black;
    stroke-width: 0.05;
    stroke-linecap:square;
}

.door {
    stroke: #808000;
    stroke-width: 0.15;
}

.gridline {
    stroke: black;
    stroke-width: 0.01;
    //stroke-opacity: 0.5;
    stroke-dasharray: 0.05 0.05;
}

.folder-count {
    font-family:'Roboto Condensed',sans-serif;
    fill:black;
    fill-opacity: 1;
    alignment-baseline:middle;
    text-anchor:middle;
    font-size: 0.4px;
}
    </style>

    <rect x="0" y="0" height="10" width="10" fill="#009A17" fill-opacity="0.5" />
    <rect x="2" y="2" height="6" width="6" class="wall" fill="white" fill-opacity="1" />
    <line class="wall" x1="4" y1="2" x2="4" y2="8"/>
    <line class="wall" x1="5" y1="2" x2="5" y2="7"/>
    <line class="wall" x1="4" y1="7" x2="8" y2="7"/>

    <line class="wall" x1="2" y1="3" x2="4" y2="3"/>
    <line class="wall" x1="2" y1="3" x2="4" y2="3"/>
    <line class="wall" x1="2" y1="4" x2="4" y2="4"/>
    <line class="wall" x1="2" y1="5" x2="4" y2="5"/>
    <line class="wall" x1="2" y1="6" x2="4" y2="6"/>
    <line class="wall" x1="2" y1="7" x2="3" y2="7"/>
    <line class="wall" x1="3" y1="7" x2="3" y2="8"/>

    <line class="wall" x1="5" x2="8" y1="4" y2="4"/>

    <line class="door" x1="4.3" x2="4.7" y1="2" y2="2" />
    <line class="door" x1="3" y1="7.3" x2="3" y2="7.7" />

    <line class="door" x1="5" y1="2.3" x2="5" y2="2.7" />
    <line class="door" x1="5" y1="4.3" x2="5" y2="4.7" />
    <line class="door" x1="4.3" x2="4.7" y1="7" y2="7" />
    <line class="door" x1="4.3" x2="4.7" y1="7" y2="7" />


    <x-svg.gridmap.wall x="6" y="7" dy="1" door="0" />
    <x-svg.gridmap.wall x="7" y="7" dy="1" door="0" />
    <x-svg.gridmap.wall x="6" y="6" dy="1"  />
    <x-svg.gridmap.wall x="7" y="6" dy="1"  />
    <x-svg.gridmap.wall x="6" y="6" dx="2" />

    <x-svg.gridmap.door x="4" y="2" :dy="true"  />
    <x-svg.gridmap.door x="4" y="3" :dy="true"  />
    <x-svg.gridmap.door x="4" y="4" :dy="true"  />
    <x-svg.gridmap.door x="4" y="5" :dy="true"  />
    <x-svg.gridmap.door x="4" y="7" :dy="true"  />
    <x-svg.gridmap.door x="6" y="6" :dx="true"  />
    <x-svg.gridmap.door x="7" y="6" :dx="true"  />

    <line x1="0" y1="0" x2="0" y2="10" class="gridline"/>
    <line x1="1" y1="0" x2="1" y2="10" class="gridline"/>
    <line x1="2" y1="0" x2="2" y2="10" class="gridline"/>
    <line x1="3" y1="0" x2="3" y2="10" class="gridline"/>
    <line x1="4" y1="0" x2="4" y2="10" class="gridline"/>
    <line x1="5" y1="0" x2="5" y2="10" class="gridline"/>
    <line x1="6" y1="0" x2="6" y2="10" class="gridline"/>
    <line x1="7" y1="0" x2="7" y2="10" class="gridline"/>
    <line x1="8" y1="0" x2="8" y2="10" class="gridline"/>
    <line x1="9" y1="0" x2="9" y2="10" class="gridline"/>
    <line x1="10" y1="0" x2="10" y2="10" class="gridline"/>
    <line x1="0" y1="0" x2="10" y2="0" class="gridline"/>
    <line x1="0" y1="1" x2="10" y2="1" class="gridline"/>
    <line x1="0" y1="2" x2="10" y2="2" class="gridline"/>
    <line x1="0" y1="3" x2="10" y2="3" class="gridline"/>
    <line x1="0" y1="4" x2="10" y2="4" class="gridline"/>
    <line x1="0" y1="5" x2="10" y2="5" class="gridline"/>
    <line x1="0" y1="6" x2="10" y2="6" class="gridline"/>
    <line x1="0" y1="7" x2="10" y2="7" class="gridline"/>
    <line x1="0" y1="8" x2="10" y2="8" class="gridline"/>    
    <line x1="0" y1="9" x2="10" y2="9" class="gridline"/>
    <line x1="0" y1="10" x2="10" y2="10" class="gridline"/>
    


    <x-svg.gridmap.folder x="5" y="2" value="5" />
    <x-svg.gridmap.folder x="6" y="2" value="5" />
    <x-svg.gridmap.folder x="7" y="2" value="5" />

<x-svg.gridmap.folder x="2" y="2" value="8" />
<x-svg.gridmap.folder x="2" y="3" value="8" />
<x-svg.gridmap.folder x="2" y="4" value="8" />
<x-svg.gridmap.folder x="2" y="5" value="8" />
<x-svg.gridmap.folder x="2" y="6" value="8" />
<x-svg.gridmap.folder x="2" y="7" value="15" />
<x-svg.gridmap.folder x="7" y="7" value="40" />
<x-svg.gridmap.folder x="6" y="7" value="15" />
<x-svg.gridmap.folder x="5" y="6" value="5" />
<x-svg.gridmap.folder x="6" y="6" value="15" />
<x-svg.gridmap.folder x="7" y="6" value="15" />
<x-svg.gridmap.folder x="7" y="4" value="5" />

</svg>

<x-svg-context-menu />

</html>