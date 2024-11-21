<?php
\Laravel\Folio\render(function (\Illuminate\View\View $view) {

    $term = strtolower(trim(request('term')));


$search_list = json_decode(file_get_contents(resource_path('search.json')), true);
if (array_key_exists($term,$search_list))
return redirect($search_list[$term]);

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
