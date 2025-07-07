@props(['config'] )
<table class="table">
    <thead>
        <tr>
            <th scope="col">Purpose</th>
            <th scope="col">Color Name</th>
            <th scope="col">Hex Code</th>
            <th scope="col">Notes</th>
        </tr>
    </thead>
    <tbody>
        @isset($config)
        @foreach (config($config) as $color)
            <x-color.table-row :data="$color" />
        @endforeach
        @endisset
    </tbody>
</table>