@push('background')
{{ view('Attack.background') }}
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Give it ALL you got.</x-card.flavortext.line>
</x-card.flavortext>

<x-card :$cardNumber card-name="Body Slam" >

    <x-card.concept.staticon type="Attack" x="530" />
    <text>
<x-card.normalrule>Does 3×Size damage to defending Monster.</x-card.normalrule>
<x-card.normalrule>Does 2×Size damage to self.</x-card.normalrule>
</text>

</x-card.Attack>
