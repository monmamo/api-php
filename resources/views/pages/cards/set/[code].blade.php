<?php
$code_parts = explode(',', $code);

$set = \App\Enums\CardSet::from($code_parts[0]);
$set_count = count($set);
if ($set_count === 0) {
    abort(404, "No cards found for code: $code"); //TODO
}

$selection = $set->cards()->filterByName( $_GET['name']??'');

// Concept filters
$concepts = [];
foreach($_GET as $key => $value) {
    if (str_starts_with($key,'concept-') && $value === 'on') {
        $concepts[] = substr($key, 8);
    }
}

if (count($concepts) > 0) {
    $selection = $selection->filterByConcepts($concepts);
}

$selection = $selection->skip($code_parts[1] ?? 0);
if (isset($code_parts[2])) 
    $selection = $selection->take($code_parts[2]);


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

        <form action="/cards/set/{{$code}}" method="GET">
            <div class="mb-3">
              <label for="nameField" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="nameField" aria-describedby="emailHelp" value="{{$_GET['name'] ?? ''}}">
              <div id="emailHelp" class="form-text">Search for part of a card's name.</div>
            </div>
            <div class="mb-3">
                <x-form.concept>Attack</x-form.concept>
                <x-form.concept>Bystander</x-form.concept>
                <x-form.concept>Defense</x-form.concept>
                <x-form.concept>Draw</x-form.concept>
                <x-form.concept>Master</x-form.concept>
                <x-form.concept>Mobster</x-form.concept>
                <x-form.concept>Monster</x-form.concept>
                <x-form.concept>Skill</x-form.concept>
                <x-form.concept>Trait</x-form.concept>
                <x-form.concept>Upkeep</x-form.concept>
                <x-form.concept>Vendor</x-form.concept>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        @fragment('card-list')
        <x-card-table :cards="$selection" />
        @endfragment
</x-guest-layout>
