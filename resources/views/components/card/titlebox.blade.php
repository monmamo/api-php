
@props(['cardType'=>null,'cardName'=>null,'transparent_name_background'=>false])

<x-card.box slug="titlebox" >

    <?php
    $has_icon = \Illuminate\Support\Facades\View::exists($cardType . '.icon');
    $text_x =  config('card-design.titlebox.text_x')($has_icon) ;
    
    if ($has_icon) {
    ?>
        <svg id="card-type-icon" x="6" y="6" width="128" height="128" viewBox="0 0 128 128">
            <g transform="scale(0.25)" fill="#000000" fill-opacity="1">
                <?= view($cardType . '.icon'); ?>
            </g>
        </svg>
    <?php
    }
    ?>
    
    <text x="<?= $text_x ?>" y="@titleboxspec(cardtype-baseline)" text-anchor="middle" class="cardtype" alignment-baseline="hanging"><?= \strtoupper($cardType) ?></text>
    <text x="<?= $text_x ?>" y="@titleboxspec(cardname-baseline)" text-anchor="middle" class="cardname" alignment-baseline="baseline"><?=  $cardName ?></text>
    </x-card.box >

    <?php
//<line x1="0" y1="0" x2="650" y2="70" stroke="yellow" stroke-width="2" />
//<line x1="0" y1="70" x2="650" y2="140" stroke="yellow" stroke-width="2" />
