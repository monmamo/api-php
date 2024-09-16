@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card.flavortext>
<x-card.flavortext.line>Psst. I got a great deal for you.</x-card.flavortext.line>
</x-card.flavortext>

<x-card :$cardNumber card-name="Creepy Guy in the Alley" >
<x-card.rulebox>
    <x-card.concept-card type="Vendor" />
    <x-card.concept-card type="Integrity">1d4</x-card.concern-card>
<x-slot:normal>
    Draw two cards
    from the bottom of your Library.
</x-slot:normal>
</x-card.rulebox>

</x-card>
{{-- inspiration: https://bulbapedia.bulbagarden.net/wiki/Looker_(Ultra_Prism_152) --}}
