@push('background')
{{ view('Vendor.background') }}
<x-card.image-credit>Image by logturnal on Freepik</x-card.image-credit>
{{-- https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm --}}
@endpush

<x-card :$cardNumber card-name="Mana Recycle System">
    <image x="0" y="0" class="hero" href="@local(A212.jpg)" />
    
        <x-card.concept.staticon type="Vendor" x="530" />
        <x-card.concept.staticon type="Integrity" x="530" >1d4</x-card.concern-card>
            <text>
                <x-card.normalrule>You may do one of the following:</x-card.normalrule>
                <x-card.normalrule>&bullet; Put a basic Mana card from your Discard into your Hand.</x-card.normalrule>
                <x-card.normalrule>&bullet; Shuffle 3 basic Mana cards from your Discard pile into your Library.</x-card.normalrule>
            </text>
    
</x-card>
