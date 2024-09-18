@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Psst. I got a great deal for you.</x-card.flavortext.line>
</x-card.flavortext>

<x-card :$cardNumber card-name="Creepy Guy in the Alley" >

    <x-card.concept.staticon type="Vendor" x="530" />
    <x-card.concept.staticon type="Integrity" x="530" >1d4</x-card.concern-card>
<text>
<x-card.normalrule>Draw two cards</x-card.normalrule>
<x-card.normalrule>from the bottom of your Library.</x-card.normalrule>
</text>


</x-card>
{{-- inspiration: https://bulbapedia.bulbagarden.net/wiki/Looker_(Ultra_Prism_152) --}}
