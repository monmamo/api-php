@push('background')
{{ view('Upkeep.background') }}

<x-card.flavortext>
    <x-card.flavortext.line>Mostly error.</x-card.flavortext.line>
    </x-card.flavortext>
    @endpush


<x-card :$cardNumber card-name="Trial and Error">

    <text y="500" filter="url(#solid)">
        <x-card.smallrule>Put this card on the Battlefield.</x-card.smallrule>
</text>

<x-card.phaserule type="Resolution" :lines="3">
    <text >
<x-card.normalrule>You may redo any attack or defense once.</x-card.normalrule>
<x-card.normalrule>If so, you must keep the result.</x-card.normalrule>
<x-card.normalrule>If the result improves, discard this card.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card>
