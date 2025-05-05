@props(['cards'])

<table class="table">
    <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Concepts</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cards as $card_info)
        <tr>
            <td><a href="/cards/card/{{$card_info->cardNumber()}}">{{$card_info->cardNumber()}}</a></td>
            <td><a href="/cards/card/{{$card_info->cardNumber()}}">{{$card_info->name()}}</a></td>
            <td>
            @foreach($card_info->concepts() as $concept)
            @php
            assert($concept instanceof \App\Concept);
            @endphp
               <x-icons.inline.concept :$concept size="45"/> 
                @endforeach
            </td>
        </tr>
        @empty
    <tr><td>No matches.</td></tr>
        @endforelse
    </tbody>
</table>
