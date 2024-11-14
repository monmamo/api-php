<?php
$deck = new \Canon\Deck($id);

?>
<x-guest-layout>

    <x-slot:page-title><?= $name ?> | Card Game</x-slot>

        <x-breadcrumbs :items="['/cg'=>'Monsters Masters & Mobsters Card Game', '/cg/rules'=>'Rules','/cg/decks'=>'Available Decks']" />

        <h1><?= $name ?></h1>

        {{$details}}

        <ul class="nav">
            <li class="nav-item">
                Contains <?php echo $deck->count(); ?> cards. Click on a card name to view its details.
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cards/deck/{{$id}}/print">Print This Deck</a>
            </li>
        </ul>

        <div class="container">
            <div class="row">
                <div class="col-3">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" hx-boost="true" hx-target="#right-section" hx-swap="innerHTML">

                        <?php
                        foreach ($deck->distinctCards as $card_number => $card_info) {
                            $card_info = \App\Card\make($card_number);
                        ?>
                            <li><a href="/cards/card/<?php echo $card_number; ?>/svg" class="card-link link-body-emphasis d-inline-flex text-decoration-none rounded"><?php echo $count; ?> <?php echo $card_number; ?> <?php echo $card_info->name() ?? ''; ?> </a></li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="col-9" id="right-section"></div>
            </div>
        </div>

</x-guest-layout>
