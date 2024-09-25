@push('background')
{{ view('Vendor.background') }}
'image-credit' => "Image by logturnal on Freepik",

{{-- https://www.freepik.com/free-vector/recycle-colorful-geometric-gradient-logo-vector_27230675.htm --}}
@endpush

<x-card :$cardNumber :$dx :$dy card-name="Mana Recycle System">
    <image x="0" y="0" class="hero" href="@local(A212.jpg)" />
    
        <x-card.concept.staticon type="Vendor" :dx="2" />
        <x-card.concept.staticon type="Integrity" value="1d4" />

        <x-card.phaserule type="Draw" lines="5"><text>
<x-card.normalrule>You may do one of the following:</x-card.normalrule>
<x-card.normalrule>&bullet; Put a basic Mana card </x-card.normalrule>
<x-card.normalrule>from your Discard into your Hand.</x-card.normalrule>
<x-card.normalrule>&bullet; Shuffle 3 basic Mana cards </x-card.normalrule>
<x-card.normalrule>from your Discard pile into your Library.</x-card.normalrule>
</text></x-card.phaserule>
    
</x-card>
