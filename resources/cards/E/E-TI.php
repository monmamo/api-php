<?php

// https://www.rsc.org/periodic-table/element/
return [
    'name' => 'Titanium',
    'concepts' => ['Mana', 'Material'],
    'flavor-text' => [],
    'background' => null,
    'content' => <<<'HTML'
{{ view('Material.element-icon', ['symbol' => 'Ti']) }}
HTML
];
