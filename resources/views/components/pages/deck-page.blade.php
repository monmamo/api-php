@props(['id','details'=>null])
<?php
$deck = new \Canon\Deck($id);
?>
<x-guest-layout>

    <x-slot:page-title><?= $deck->name ?> | {{__('cg')}}</x-slot>

    <x-breadcrumbs>
        <x-breadcrumbs.crumb url="/cg">{{__('cg')}}</x-breadcrumbs.crumb>
        <x-breadcrumbs.crumb url="/cg/decks">Available Decks</x-breadcrumbs.crumb>
    </x-breadcrumbs>
        
    <h1><?= $deck->name ?></h1>

    {{$details}}

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
                <div class="p-2"><x-card :link="true" :cardNumber="$card_info->cardNumber()" width="200" /></div>
                @endforeach
                    </div>
            @endforeach
    </div>
                
</x-guest-layout>
