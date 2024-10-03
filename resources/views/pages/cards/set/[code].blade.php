<title>$code</title>
<ul>
    <?php
    foreach (\App\Enums\CardSet::from($code)->cards() as $card_spec) {
        assert($card_spec instanceof \App\Contracts\Card\CardComponents);
        echo sprintf("<li>%s %s</li>", $card_spec->cardNumber(), $card_spec->name());
    }
    ?>
</ul>
