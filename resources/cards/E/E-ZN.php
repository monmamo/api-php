<?php

// https://www.rsc.org/periodic-table/element/
return [
    'name' => 'Zinc',
    'concepts' => ['Mana', 'Material'],

    'background' => null,
    'content' => <<<'HTML'
{{ view('Material.element-icon', ['symbol' => 'Zn']) }}
HTML
];
