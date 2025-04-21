<?php
use Illuminate\Support\Facades\Blade;

if ($card_number === '' || !\Illuminate\Support\Facades\View::exists("$card_number")) {
    abort(404);
    exit;
}

?>
<x-card-page :number="$card_number" />
