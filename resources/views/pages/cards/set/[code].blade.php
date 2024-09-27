<title>$code</title>
<ul>
    <?php
    foreach (\App\Enums\CardSet::from($code)->cardNumbers() as $card_number) {
        $card_number_object =  \App\CardNumber::make($card_number);
        $spec = require $card_number_object->getSpecFilePath();
        echo "<li>$card_number $spec[name]</li>";
    }
    ?>
</ul>
