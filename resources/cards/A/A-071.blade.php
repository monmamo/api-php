@push('background')
{{ view('Place.background') }}

<x-card.flavortext>
    <x-card.flavortext.line>Prohibition only drives drunkenness behind doors and into dark places. - Mark Twain</x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber card-name="Speakeasy">

<x-card.concept.staticon type="Place" x="530" />
<text>
<x-card.normalrule>For any attempt to use an rule from a </x-card.normalrule>
<x-card.normalrule>Mobster card, roll 1d6. </x-card.normalrule>
<x-card.normalrule>If @dieroll(1,2) the effect has no effect.</x-card.normalrule>
    </text>

</x-card>
