<?php

// https://www.rsc.org/periodic-table/element/
return [
    'name' => 'Silicon',
    'concepts' => ['Mana', 'Material'],
    'flavor-text' => [],
    'background' => null,
    'content' => <<<'HTML'
{{ view('Material.element-icon', ['symbol' => 'Si']) }}
HTML
];
