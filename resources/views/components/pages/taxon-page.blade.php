@props(['slug'])
<x-scripts.popover />

<?php
use Illuminate\Support\Str;

$class = "\\Canon\\Taxons\\$slug";
if (!class_exists($class)) abort(404);
?>

<x-guest-layout>
    <x-breadcrumbs :items="['/taxons'=>'Taxons']" />

<h1><?= Str::headline($slug) ?></h1>

<p>{{ $class::gloss() }}</p>

<div="container">
    <div class="row">
        <div class="col-4"><table class="table">
            <h4>Alternate Names</h4>
            <tbody>
<?php
foreach([
    \Canon\Taxons\Attributes\NeuterName::class => "Neuter",
    \Canon\Taxons\Attributes\MasculineAnthropeName::class => 'Masculine Anthrope',
    \Canon\Taxons\Attributes\FeminineAnthropeName::class => 'Feminine Anthrope',
    \Canon\Taxons\Attributes\MasculineMonsterName::class => 'Masculine Monster',
    \Canon\Taxons\Attributes\FeminineMonsterName::class => 'Feminine Monster'
    ] as $fqn => $label) {
$attribute = $class::classAttribute($fqn);
if (is_null($attribute)) {
    continue;
}
?>
                <tr>
                    <th scope="col"><?= $label ?></th>
                    <td><?= $attribute->name ?></td>
                    </tr>
<?php } ?>
                                    </tbody>
                                </table>

</div>
<div class="col-4">
    <h4>Statistics</h4>


    <table class="table">
        <tbody>
        <tr>
                <th scope="col">Type</th>
                <td><?=  $class::typeString() ?></td>
            </tr>
            <tr>
                <th scope="col"><a href="/concepts/Rarity">Rarity</a></th>
                <td>1 in <?= number_format( $class::rarity()) ?></td>
            </tr>
            <tr>
                <th scope="col"><a href="/concepts/Size">Size Delta</a></th>
                <td><?=  $class::sizeDelta() > 0 ? '+' : '' ?><?=  $class::sizeDelta() ?></td>
            </tr>
        </tbody>
    </table>

</div>
                    </div>
                </div>

{{$slot}}
</x-guest-layout>
