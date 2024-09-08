@props([
    'cardType',
     'cardName',
      'cardNumber',
       'stats', 
       'subtypes',
        'creditColor'=>'white',
        'transparentNameBackground'=>false
        ])
<?php

?>
<svg width="@cardspec(width)" height="@cardspec(height)" viewBox="0 0 @cardspec(width) @cardspec(height)" xmlns="http://www.w3.org/2000/svg">

    <title><?= $cardName ?></title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto");
        @import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed");

        text {
            font-family: 'Roboto', sans-serif;
        }

        .credit {
            font-style: normal;
            font-size: 20px;
            fill: <?= $creditColor  ?>;
        }

        .flavor {
            font-style: italic;
            font-size: 25px;
            white-space: normal;
        }

        tspan.bodytext {
            font-style: normal;
            font-size: 30px;
            font-weight: 400;
            font-style: normal;
            text-align: center;
            text-anchor: middle;
            white-space: normal;
            fill: black;
            margin: 5px;
            alignment-baseline: middle;
        }

        tspan.smallrule {
            font-style: normal;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            white-space: normal;
            text-align: center;
            text-anchor: middle;
            alignment-baseline: middle;
            fill: black;
        }

        .cardtype {
            font-style: normal;
            font-size: 30px;
            font-weight: 500;
            font-style: normal;
            fill: black;
        }

        .cardname {
            font-family: 'Roboto Condensed';
            font-style: normal;
            font-size: 50px;
            font-weight: 500;
            font-style: normal;
            fill: black;
        }

        image.hero {
            position: relative;
            display: block;
            text-align: center;
            height: 450px;
            width:650px;
        }

        .svg-hero {
            position: absolute;
            transform: translate(@cardspec(hero.icon.translate.x)px,@cardspec(hero.icon.translate.y)px);
            margin: 0;
            scale:@cardspec(hero.icon.scale);
            fill: #ffffff;
            fill-opacity: 1;
        }

        .standard-background-icon {
            transform: translate(@cardspec(icon.translate.x)px,@cardspec(icon.translate.y)px) scale(@cardspec(icon.scale));
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
    </defs>

    <rect x="0" y="0"  width="@cardspec(width)" height="@cardspec(height)"  fill="#000000" />

<text id="MON-MA-MO" xml:space="preserve">
<tspan x="50%" y="440" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MON</tspan>
<tspan x="50%" y="657.7" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MA</tspan>
<tspan x="50%" y="875.4" font-family="Roboto"  text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MO</tspan>
</text>

@stack('background')

<text x="50%" y="50" class="credit" text-anchor="middle" alignment-baseline="baseline">
    @stack('image-credit')
</text>

<text x="50%" y="510" width="100%" height="auto" text-anchor="middle">
    @stack('flavor-text')
</text>




<x-card.bodybox id="bodybox">
    {{ $slot ?? null }}
</x-card.bodybox>

    <x-card.titlebox :$cardType :$cardName :$transparentNameBackground></x-card.titlebox>

    <text x="1.5%" y="98.5%" class="credit" text-anchor="start" alignment-baseline="top">&#169; Monsters Masters &amp; Mobsters LLC</text>
    <text x="70%" y="98.5%" class="credit" text-anchor="middle" alignment-baseline="top"><?php echo \date('Y-m-d'); ?></text>
    <text x="98.5%" y="98.5%" class="credit" text-anchor="end" alignment-baseline="top"><?php echo $cardNumber; ?></text>
</svg>
<?php
// <rect x="50" y="50" width="650" height="950" fill="#000000" fill-opacity="10%"/>