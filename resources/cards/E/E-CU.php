<?php

// https://www.rsc.org/periodic-table/element/
return [
    'name' => 'Copper',
    'concepts' => ['Mana', 'Material'],
    'flavor-text' => [],
    'background' => null,
    'content' => <<<'HTML'
{{ view('Material.element-icon', ['symbol' => 'Cu']) }}
HTML
];
