<text x="50%" y="600" width="100%" height="auto" filter="url(#solid)">
<?php
foreach (\App\Strings\explode_lines( $slot) as $line) {
    echo "<tspan x=\"50%\"  dy=\"35\" width=\"100%\"  class=\"bodytext\">{$line}</tspan>";
}
?>
</text>
