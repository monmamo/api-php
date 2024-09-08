<text x="50%" y="500" width="100%" height="auto" filter="url(#solid)" id="card-type-rule">
    <?php foreach (\App\Strings\explode_lines( $slot ?? '') as $line) { ?>
        <tspan x="50%" dy="25" class="smallrule" alignment-baseline="middle"><?= $line ?></tspan>
        <?php } ?>
</text>
