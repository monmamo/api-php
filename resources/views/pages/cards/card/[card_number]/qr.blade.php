<?php
// http://monmamo.com/qr/XXXXX-0000
// byte: 2L or 3Q or 4H
// alphanumeric:

use Illuminate\Support\Facades\Blade;

if (!\Illuminate\Support\Facades\View::exists("$card_number")) {
    abort(404);
    exit;
}

$card_number_object =  \App\CardNumber::make($card_number);
$spec = \App\Card\make($card_number);


$qr = new \App\QRCode('https://monmamo.com/');

echo $qr::generateSVGFrom($qr->getBestQRCode());
