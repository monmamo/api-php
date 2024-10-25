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

$encoding_mode = 4; // byte encoding
$size = 4; // size of the QR code

$qr = new \App\QRCode('https://www.qrcode.com/');


echo $qr::generateSVGFrom($qr->getRawQRCode());

$bestMatrix = null;
$bestScore = 99999;
$bestMask = -1;
for ($index = 0; $index < 8; $index++) {
    $matrix = $qr->getMaskedQRCode($index);
    $penaltyScore =    $qr::getPenalty($matrix);
    if ($penaltyScore < $bestScore) {
        $bestScore = $penaltyScore;
        $bestMatrix = $matrix;
        $bestMask = $index;
    }
}

echo $qr::generateSVGFrom($matrix);
