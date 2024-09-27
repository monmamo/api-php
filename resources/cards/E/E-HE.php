<?php
// https://www.rsc.org/periodic-table/element/8/helium
return [
'name' => "Helium",
'concepts' => ["Mana","Material"],
'flavor-text' => [],
'background' => null,
'content' => <<<HTML
{{ view('Material.element-icon', ['symbol' => 'He']) }}
HTML
];
