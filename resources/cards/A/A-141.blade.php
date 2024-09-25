@push('background')
{{ view('Vendor.background') }}

'image-credit' => "Image by ",


{{-- https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm --}}

<x-card.flavortext>
    <x-card.flavortext.line></x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber :$dx :$dy card-name="Lottery">
    <image x="0" y="0" class="hero" href="@local(A146.)" />
    <x-card.concept.staticon type="Vendor" dx="2"  />
    <x-card.concept.staticon type="Item" />
       
        
</x-card>
