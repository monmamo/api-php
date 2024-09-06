<?php
// dump($attributes);//TEMP

$card_type_object = new \App\CardType($cardType);
$card = optional(); //TEMP

$image = match (true) {
        // $card instanceof \App\Contracts\Card\OnlineImage => $make_image_tag($card->imageUri()),
        // $card instanceof \App\Contracts\Card\FileSystemImage => value(function() use ($card) {
        //     $path = $card->imagePath();
        //     assert(\file_exists($path), "Image file not found: {$path}");
        //     return $make_image_tag( 'data:image/jpg;base64,' . \base64_encode(\file_get_contents($path)));
        // }),
    default => ''
};

$colors = match (true) {
    !isset($colors) => new \stdClass(),
    \is_object($colors) => $colors,
    \is_array($colors) => (object) $colors,
    \is_string($colors) => (object) ['credits' => $colors, 'flavor_text' => $colors],
    \is_null($colors) => new \stdClass(),
};
?>

<svg width="750" height="1050" viewBox="0 0 750 1050" xmlns="http://www.w3.org/2000/svg">

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
            fill: <?php echo $colors->credits ?? 'white'; ?>;
        }

        .flavor {
            font-style: italic;
            font-size: 25px;
            white-space: normal;
            fill: <?php echo $colors->flavor_text ?? 'white'; ?>;
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
        }

        tspan.smallrule {
            font-style: normal;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            white-space: normal;
            text-align: center;
            text-anchor: middle;
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

        g.svg-hero {
            position: absolute;
            transform: translate(121px, 50px);
            margin: 0;
            scale: 0.87890625;
            fill: #ffffff;
            fill-opacity: 1;
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

    <rect x="0" y="0" width="750" height="1050" fill="#000000" />

<text id="MON-MA-MO" xml:space="preserve">
<tspan x="50%" y="440" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MON</tspan>
<tspan x="50%" y="657.7" font-family="Roboto" text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MA</tspan>
<tspan x="50%" y="875.4" font-family="Roboto"  text-anchor="middle"  font-size="265" font-weight="700" fill="#333333" xml:space="preserve">MO</tspan>
</text>



    {{ $slot ?? null }}

    <x-card.bodybox>

        <?php

        $stats_recognized = [
        //     'integrity' => \App\CardStats\Integrity::class,
        //     'damage_capacity' => \App\CardStats\DamageCapacity::class,
        //     'level' => \App\CardStats\Level::class,
        //     'size' => \App\CardStats\Size::class,
        //     'speed' => \App\CardStats\Speed::class,
        ];

        $stats_found = [];

        // foreach ($stats_recognized as $slug => $fqn) {
        //     if (isset($$slug)) {
        //         $stats_found[] = [$$slug, $fqn];
        //     }
        // }

        // foreach ($subtypes ?? [] as $subtype_name) {
        //     $stats_found[] = [$subtype_name, "\\Stats\\{$subtype_name}"];
        // }

        if (!defined('STAT_ICON_HEIGHT')) \define('STAT_ICON_HEIGHT', 54);
        ?>
        <rect width="200" height="<?php echo STAT_ICON_HEIGHT * \count($stats_found); ?>" fill="#FFFFFF" fill-opacity="85%" />
        <?php

        foreach ($stats_found as $index => $data) {
            [$value, $fqn] = $data;
        ?>
            <g transform="translate(2,<?php echo STAT_ICON_HEIGHT * $index + 2; ?>) scale(0.09375)" fill="#000000" fill-opacity="1"><?php echo $fqn::icon(); ?></g>
            <text x="55" y="<?php echo STAT_ICON_HEIGHT * $index + 2; ?>" dy="27" font-size="40px" text-anchor="left" alignment-baseline="middle"><?php echo $value; ?></text>

        <?php
        }

        $y = 475;
        ?>

        <text x="50%" y="<?php echo $y; ?>" width="100%" height="auto" filter="url(#solid)">
            <?php
            $stats ??= [];

            if (\count($stats) > 0) {
                echo '<tspan x="50%"  dy="35" width="100%"  class="smallrule">' . \implode(' ・ ', $stats) . '</tspan>';
            }


            ?>
        </text>

        <?php if (!isset($transparent_name_background) || !$transparent_name_background) { ?>
            <rect y="810" width="650" height="140" fill="#FFFFFF" />
        <?php }

        $has_icon = \Illuminate\Support\Facades\View::exists($cardType . '.icon');
        $text_x = $has_icon ? 325 : 395;

        if ($has_icon) {
        ?>
            <svg id="card-type-icon" x="6" y="816" width="128" height="128" viewBox="0 0 128 128">
                <g transform="scale(0.25)" fill="#000000" fill-opacity="1">
                    <?= view($cardType . '.icon'); ?>
                </g>
            </svg>
        <?php
        }
        ?>

        <text x="<?php echo $text_x; ?>" y="850" text-anchor="middle" class="cardtype" alignment-baseline="middle"><?php echo \strtoupper($card_type_object->title()); ?></text>
        <text x="<?php echo $text_x; ?>" y="920" text-anchor="middle" class="cardname" alignment-baseline="bottom"><?= $cardName ?></text>

    </x-card.bodybox>

    <text x="2.5%" y="97.5%" class="credit" text-anchor="start" alignment-baseline="top">&#169; Monsters Masters &amp; Mobsters LLC</text>
    <text x="70%" y="97.5%" class="credit" text-anchor="middle" alignment-baseline="top"><?php echo \date('Y-m-d'); ?></text>
    <text x="97.5%" y="97.5%" class="credit" text-anchor="end" alignment-baseline="top"><?php echo $cardNumber; ?></text>
</svg>
