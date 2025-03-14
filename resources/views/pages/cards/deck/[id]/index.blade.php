<?php
$deck = new \Canon\Deck($id);

?>
<x-guest-layout>

    <x-slot:page-title><?= $deck->name ?> | Card Game</x-slot>

        <x-breadcrumbs :items="['/cg'=>'Monsters Masters & Mobsters Card Game', '/cg/rules'=>'Rules','/cg/decks'=>'Available Decks']" />

        <h1><?= $deck->name ?></h1>

        {{$deck->details}}

        <ul class="nav">
            <li class="nav-item">
                Contains <?php echo $deck->count(); ?> cards. Click on a card to view its details.
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cards/deck/{{$id}}/print">Print This Deck</a>
            </li>
        </ul>

        <div class="row">
                @foreach(array_chunk($deck->distinctCards, 4) as $chunk)
                <div class="d-flex flex-row">
                    @foreach ($chunk as  $card_info) 
                       <div class="p-2"><a href="/cards/card/{{$card_info->cardNumber()}}"><x-card :cardNumber="$card_info->cardNumber()" width="200" /></a></div>
                        @endforeach
                            </div>
                    @endforeach
            </div>
                

</x-guest-layout>
