@push('background')
<image x="0" y="0" href="@local(A-091-full.png)"/>
<x-card.image-credit>
    @ai
    </x-card.image-credit>
    
'flavor-text' => [
'He builds the hugest venues. Yuge ones.'
],
@endpush

<x-card  :$cardNumber card-name="Flamboyant Mogul" >

    
        'concepts' => ['Vendor'],
        <x-card.concept.row>
        <x-card.concept.card type="Male" x="0" width="50" />
        <x-card.concept.card type="Integrity" x="50" width="120" >1d4</x-card.concept>
        </x-card.concept.row>

        <text y="130" filter="url(#solid)">
<x-card.normalrule>Discard five cards from your Hand</x-card.normalrule>
<x-card.normalrule>to play a Venue card from your Hand.</x-card.normalrule>
</text>

</x-card>
