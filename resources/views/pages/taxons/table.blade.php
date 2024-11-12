<?php

use Illuminate\Support\Str;
?>

<x-guest-layout>
    <h1>Taxonomy Table</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Taxon</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
                <th scope="col">Rarity</th>
                <th scope="col">Size Delta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (\Canon\taxons() as $taxon) {
                try {
                    $class = "\\Canon\\Taxons\\$taxon";
            ?>
                    <tr>
                        <td><a href="/taxons/{{ $taxon }}"><?= Str::headline($taxon) ?></a></td>
                        <td><?= $class::gloss() ?></td>
                        <td><?= Str::headline($class::type()->name) ?></td>
                        <td>1 in <?= number_format($class::rarity()) ?></td>
                        <td class="text-end"><?= $class::sizeDelta() > 0 ? '+' : '' ?><?= $class::sizeDelta() ?></td>
                    </tr>
            <?php } catch (\Throwable $e) {
                    dump($taxon);
                    throw $e;
                }
            }
            ?>

        </tbody>
    </table>
</x-guest-layout>
