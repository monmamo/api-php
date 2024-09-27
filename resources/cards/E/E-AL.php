<?php

// https://www.rsc.org/periodic-table/element/13/aluminium
return [
    'name' => 'Aluminum',
    'concepts' => ['Mana', 'Material'],
    'flavor-text' => [],
    'background' => null,
    'content' => <<<'HTML'
{{ view('Material.element-icon', ['symbol' => 'Al']) }}
HTML
];
