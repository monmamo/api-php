<?php
// https://www.rsc.org/periodic-table/element/79/gold
return [
'name' => "Gold",
'concepts' => ["Mana","Material"],
'flavor-text' => [],
'background' => null,
'content' => <<<HTML
{{ view('Material.element-icon', ['symbol' => 'Au']) }}
HTML
];
