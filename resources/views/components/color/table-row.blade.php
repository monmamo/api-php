@props(['color','purpose', 'notes','data'])

<?php

use App\Enums\Color;

$purpose ??= $data['purpose'] ?? null;
$notes ??= $data['notes'] ?? null;
$color ??= $data['color'] ?? null;

$color_enum = Color::resolve($color);

?>

<tr>
    @isset($purpose)
    <td><strong>{{ $purpose }}</strong></td>
    @endisset
    <td>{{ \Illuminate\Support\Str::headline($color_enum->name) }}</td>
    <td><x-color.badge :color="$color_enum->value" /></td>
    @isset($notes)
    <td>{{ $notes }}</td>
    @endisset
</tr>