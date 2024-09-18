@push('background')
{{ view('Upkeep.background') }}
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Mostly error.</x-card.flavortext.line>
</x-card.flavortext>

<x-card :$cardNumber card-name="Trial and Error">

<text>
<x-card.normalrule>Put this card on the Battlefield.</x-card.normalrule>
<x-card.normalrule>As long as this card is in the Battlefield,</x-card.normalrule>
<x-card.normalrule>you may redo any attack or defense once.</x-card.normalrule>
<x-card.normalrule>If the result improves, discard this card.</x-card.normalrule>
</text>

</x-card>
