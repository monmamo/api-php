<x-guest-layout><x-slot:page-title>Timeline</x-slot>
    
    
    <x-breadcrumbs>
        <x-breadcrumbs.crumb url="/lore">Lore</x-breadcrumbs.crumb>
    </x-breadcrumbs>
    
    <h1>Timeline</h1>
<?php

$timelinePath = base_path('canon/timeline.csv');
assert (file_exists($timelinePath));

$lines = array_map('str_getcsv', file($timelinePath));
// Remove header row
array_shift($lines);    

?>
<table>
    <tr>
        <th>Date/Year (GA)</th>
        <th>Event</th>
    </tr>
<?php 
foreach ($lines as $line) {
$event = $line[1];
preg_match_all('/\[\[(.*?)\]\]/', $event, $matches);
foreach ($matches[1] as $match) {
    $event = str_replace('[[' . $match . ']]', '<a href="/' . urlencode($match) . '">' . $match . '</a>', $event);
}
?>
    <tr>
        <td><?= $line[0] ?></td>
        <td><?= $event ?></td>
    </tr>
<?php } ?>        
</table>


</x-guest-layout>