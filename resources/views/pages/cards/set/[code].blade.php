<?php
$files = \Illuminate\Support\Facades\Storage::disk('cards')->files($code);
// $files = array_filter(Storage::disk('local')->files(), function ($file)
// {
//     return preg_match('/_(.*)\.blade\.php$/U', $file);
// });
    
//"$code/$code-*.blade.php");
echo "<title>$code</title>";
echo "<pre>";
print_r($files);
exit;

$view = view("$set.$card_number")->with('cardNumber', $card_number);

\header('Content-Type: image/svg+xml');
if (isset($_REQUEST['download'] )) 
\header('Content-Disposition: attachment; filename="'.$card_number.'.svg"');

    echo $view;

