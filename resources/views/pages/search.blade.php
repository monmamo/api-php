<?php
\Laravel\Folio\render(function (\Illuminate\View\View $view) {

    $term = trim(request('term'));

    $card_number_object = \App\CardNumber::make($term);
    if (is_string($card_number_object->getSpecFilePath()))
        return view('pages.cards.card.[card_number].index', ['card_number' => $term]);


    $results = [];
    if ($term) {
        // $results = \App\Card::search($term);
    }

    return $view->with('results', $results);
});
?>

<x-guest-layout>
    <h1>Search</h1>

    @foreach($results as $result)
    @endforeach
</x-guest-layout>
