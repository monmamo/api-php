<text x="50%" y="475" width="100%" height="auto" filter="url(#solid)" id="card-type-rule">
<?php
    foreach (\App\Strings\explode_lines( $slot) as $line) {
        echo "<tspan x=\"50%\" dy=\"25\" width=\"100%\" class=\"smallrule\">".$line."</tspan>";
    }
    ?>
</text>
