<?php
// no at-props here, they're defined in \App\View\Components\Card

use App\CardNumber;
use App\Contracts\Card\CardComponents;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;
use Illuminate\View\View;

$rules_dy = 0;
$id = function (string $suffix) use ($cardNumber) {
    return $cardNumber . '-' . $suffix;
};


?>

<x-svg
    :$dx
    :$dy
    :id="$cardNumber"
    :$width
    :$height
    viewBox="0 0 750 1050">

    <title><?= $cardName ?></title>

    @unless($omitCommon)
    <x-card.common :specs="[$spec]"/>
    @endunless


    <rect id="absolute-bounds" x="0" y="0" width="@cardspec(width)" height="@cardspec(height)" fill="url(#{{$cardNumber}}-background)" rx="75" />

    <?php

    if (!\is_null($image_credit = $spec->imageCredit())) {
        echo \App\Strings\html(
            'text',
            ['x' => '50%', 'y' => '50', 'class' => 'credit', 'text-anchor' => 'middle', 'alignment-baseline' => 'baseline',  'fill' => $creditColor()],
            $image_credit,
        )->toHtml();
    }

    // The bodybox is the viewbox minus the titlebox.
    $bodybox_width = config("card-design.viewbox.width");
    $bodybox_height = config("card-design.viewbox.height") - config("card-design.titlebox.height");

    $bodybox_attributes = [
        'id' => "bodybox",
        'x' => config("card-design.viewbox.x"),
        'y' =>  config("card-design.viewbox.y"),
        'width' => $bodybox_width,
        'height' => $bodybox_height,
        'viewBox' => "0 0 $bodybox_width $bodybox_height"
    ];

    ?>
    <svg {{new \Illuminate\View\ComponentAttributeBag($bodybox_attributes)}}>
        <?php
        echo \App\Strings\render(
            $spec->hero(),
            $spec->prerequisitesAttribute(),
            ...$spec->content()
        );
        ?>
    </svg>

    <x-card.box slug="titlebox">
        <?php
        $text_x =  config('card-design.titlebox.text_x')(false);

        // Concept icons.
        \App\Concept::setGroupCount(\count($spec->concepts()));

        echo \App\Strings\render(...$spec->concepts());
        echo \App\Strings\render(...$spec->getAttributes(\App\CardAttributes\PhaseRule::class));
        ?>
        <text x="<?= $text_x ?>" y="<?= config('card-design.concept.box-height') + config('card-design.titlebox.title-height') * 0.7 ?>" text-anchor="middle" class="cardname" alignment-baseline="baseline" fill-opacity="{{$titleboxOpacity}}"><?= $cardName ?></text>
    </x-card.box>

    <?php
    echo \App\Strings\render($spec->flavorTextAttribute());

    $credit_y =  config('card-design.trimbox.y') + config('card-design.trimbox.height') - 5;
    ?>

    <g class="credit" fill="{{$creditColor()}}">
        <text x="<?= config('card-design.viewbox.x') ?>" y="<?= $credit_y ?>" text-anchor="start" alignment-baseline="top">&#169; Monsters Masters &amp; Mobsters LLC</text>
        <text x="70%" y="<?= $credit_y ?>" text-anchor="middle" alignment-baseline="top"><?php echo \date('Y-m-d'); ?></text>
        <text x="<?= config('card-design.viewbox.x') + config('card-design.viewbox.width') ?>" y="<?= $credit_y ?>" text-anchor="end" alignment-baseline="top"><?php echo $cardNumber; ?></text>
    </g>

    <g class="debug">
        <x-card.rect slug="trimbox" fill-opacity="0" stroke-width=3 stroke="#FF0000" rx="25" />
        <x-card.rect slug="viewbox" fill-opacity="0" stroke-width=3 stroke="#2BA6DE" stroke-dasharray="1.44" rx="5" />
        <?php
        $hero_attributes = [
            'x' => config("card-design.viewbox.x") + config("card-design.hero.x"),
            'y' => config("card-design.viewbox.y") + config("card-design.hero.y"),
            'width' => config("card-design.hero.width"),
            'height' => config("card-design.hero.height"),
        ];
        ?>
        <rect id="hero-rect" slug="hero" fill-opacity="0" stroke-width=1 stroke="#2BA6DE" stroke-dasharray="1.44" {{new \Illuminate\View\ComponentAttributeBag($hero_attributes)}} />
        <line x1="25%" y1="0" x2="25%" y2="100%" class="info secondary" />
        <line x1="50%" y1="0" x2="50%" y2="100%" class="info" />
        <line x1="75%" y1="0" x2="75%" y2="100%" class="info secondary" />
    </g>
</x-svg>
