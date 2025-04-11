<?php
$code_parts = explode(',', $code);

$set = \App\Enums\CardSet::from($code_parts[0]);

$selection = $set->cards(function(\Illuminate\Support\Collection $set)use($code_parts):\Illuminate\Support\Collection {
    $selection = $set->skip($code_parts[1] ?? 0);
if (isset($code_parts[2])) $selection = $selection->take($code_parts[2]);
return $selection;
});

?>
<x-guest-layout>

    <x-slot:page-title>{{$set->title()}} | Card System</x-slot>
    
    <x-breadcrumbs :items="['/cards'=>'Card System']" />

        <h1>{{$set->title()}}</h1>

@foreach ($selection  as $card_info) 
<a href="/cards/card/{{$card_info->cardNumber()}}"><x-card :cardNumber="$card_info->cardNumber()" width="100" /></a>
@endforeach

</x-guest-layout>
