<?php
$set =  explode('-', $card_number)[0];
\header('Content-Type: image/svg+xml');
$view = view("$set.$card_number")->with('cardNumber', $card_number)->with('cardSet', $set);
// \Illuminate\Support\Facades\View::share('card-number', $card_number);
// \Illuminate\Support\Facades\View::share('card-set', $set);

echo $view;

