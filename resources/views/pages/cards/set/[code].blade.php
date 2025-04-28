<?php
$code_parts = explode(',', $code);

$set = \App\Enums\CardSet::from($code_parts[0]);
$set_count = count($set);
if ($set_count === 0) {
    abort(404, "No cards found for code: $code"); //TODO
}

$selection = $set->cards(
    function(\Illuminate\Support\Collection $set)use($code_parts):\Illuminate\Support\Collection {
    $selection = $set->skip($code_parts[1] ?? 0);
    if (isset($code_parts[2])) $selection = $selection->take($code_parts[2]);
return $selection;
}
);

$selection_count = count($selection);

?>
<x-guest-layout>

    <x-slot:page-title>{{$set->title()}} | Card System</x-slot>
    
    <x-breadcrumbs>
        <x-breadcrumbs.crumb url="/cards">Card System</x-breadcrumbs.crumb>
    </x-breadcrumbs>
    
        <h1>{{$set->title()}}
            <x-badge>{{$code}}</x-badge>
            <x-badge>{{ $selection_count < $set_count ?  $selection_count .' of '. $set_count : $set_count }} cards</x-badge>
        </h1>

        @fragment('card-list')
        <x-card-table :cards="$selection" />
        @endfragment
</x-guest-layout>
