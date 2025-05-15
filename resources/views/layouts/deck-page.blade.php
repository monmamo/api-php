@props(['id'])
<?php
$deck = new \Canon\Deck($id);

if(isset($_GET['print'])) {
    ?>
<html>
@foreach($deck->chunk( 9) as $chunk)
<x-card-sheet :cards="$chunk"  />
    @endforeach
</html>
<?php
    
}

else if(isset($_GET['png'])) {
    ?>
<html>
    <x-card-sheet :abreast="ceil(sqrt($deck->count()))" :cards="$deck->cards"  />

<script>
document.addEventListener('DOMContentLoaded', convertSVGtoImg('png'), false);
</script>

</html>
<?php
    }
else {
?>
<x-guest-layout>

    <x-slot:page-title><?= $deck->name ?> | {{__('cg')}}</x-slot>

    <x-breadcrumbs>
        <x-breadcrumbs.crumb url="/cg">{{__('cg')}}</x-breadcrumbs.crumb>
        <x-breadcrumbs.crumb url="/cg/decks">Available Decks</x-breadcrumbs.crumb>
    </x-breadcrumbs>
        
    <h1><?= $deck->name ?> <span class="badge text-bg-secondary"><?= $deck->count() ?> cards</span></h1>

@if ($slot->isEmpty())
{{ $deck->details }}
@else
{{ $slot }}
@endif

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Click on a card to view its details.</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/cg/decks/{{$id}}?print">Print This Deck</a>
        </li>
    </ul>

    <div class="row">
        @foreach(array_chunk($deck->distinctCards, 4) as $chunk)
        <div class="d-flex flex-row">
            @foreach ($chunk as  $card_info) 
           
                <div class="p-2 position-relative">
                    <x-card :link="true" :cardNumber="$card_info->cardNumber()" width="200" />
                    <div class="badge bg-secondary p-2 fs-1 position-absolute top-0 end-0">
                            {{$deck->cardCounts[$card_info->cardNumber()]}}
                            <span class="visually-hidden">copies of this card</span>
                        </div>
                    </div>
                @endforeach
                    </div>
            @endforeach
    </div>

    <x-svg-context-menu />

</x-guest-layout>
<?php
}
?>