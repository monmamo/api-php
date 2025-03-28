<?php
use Illuminate\Support\Facades\Blade;

if (!\Illuminate\Support\Facades\View::exists("$card_number")) {
    abort(404);
    exit;
}

?>
<x-pages.card-page :number="$card_number" />
