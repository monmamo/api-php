<?php
return [
'name' => "Healing Salve",

'concepts' => ["Item","healing"],

'image-prompt' => 'green jar of healing ointment',
'image-source' => 'https://www.freepik.com/free-psd/skin-product-isolated_158243292.htm',
'image-credit' => "Image by freepik",

'flavor-text' => ["Does a monster good!"],
'background' => view('Item.background'),
'content' => <<<HTML
<image x="0" y="0" class="hero" href="@local(A120.png)" />

<x-card.phaserule type="Upkeep" y="600" lines="1">
    <text>
        <x-card.normalrule>Attach this card to a Monster.</x-card.normalrule>
    </text>
</x-card.phaserule>

<x-card.phaserule type="Resolution" lines="3">
    <text>
        <x-card.normalrule>If this Monster</x-card.normalrule>
        <x-card.normalrule>did not take any damage on this turn,</x-card.normalrule>
        <x-card.normalrule>remove 3d6 damage from it.</x-card.normalrule>
    </text>
</x-card.phaserule>
HTML
];