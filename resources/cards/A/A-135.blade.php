@push('background')
{{ view('Draw.background') }}
'image-credit' => "Image by ",

<x-card.flavortext>
    <x-card.flavortext.line></x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber :$dx :$dy card-name="Investment">
{{--  --}}
    
        <x-card.concept.staticon type="Draw" />


    
</x-card>
