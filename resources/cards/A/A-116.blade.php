@push('background')
{{ view('Draw.background') }}
'flavor-text' => [
],
<x-card.image-credit>
Image by Delapouite on Game-Icons.net under CC BY 3.0
</x-card.image-credit>
@endpush
<x-card :$cardNumber card-name="Hard Reset">
<g class="svg-hero">{{ view('Undo.icon') }}</g>

<x-card.phaserule type="Draw" height="130" >
    <text>
<x-card.normalrule>Each player shuffles all</x-card.normalrule>
    <x-card.normalrule>discarded cards into his or her Library. </x-card.normalrule>
        <x-card.normalrule>This card goes into Exile.</x-card.normalrule>
</text>
</x-card.phaserule>
</x-card>