<?php
$y = 475;
?>

<text x="50%" y="475" width="100%" height="auto" text-anchor="middle">
    <?php foreach (\App\Strings\explode_lines( $slot ?? '') as $line) { ?>
        <tspan x="50%" y="<?php echo $y; ?>" class="flavor" alignment-baseline="top"><?= $line ?></tspan>
    <?php
        $y += 25;
    }
    ?>
</text>
