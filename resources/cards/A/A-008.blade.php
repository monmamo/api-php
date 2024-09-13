@push('image-credit')
@ai 
@endpush
{{-- "dark man in a mask wearing a trenchcoat carrying a large tote bag" --}}

@push('background')
<image x="0" y="0"  href="@local(A-008-full.png)" />
@endpush

@push('flavor-text')
<x-card.flavor-text-line>Just collecting the dues.</x-card.flavor-text-line>
@endpush

<x-card :$cardNumber card-name="Bagman">
    
    <x-card.concept-card type="Vendor" y="500" />
    <x-card.concept-card type="Integrity" y="500" index="1">1d4</x-card.concern>
        <text x="50%" y="620" width="100%" height="auto" filter="url(#solid)">
            <tspan x="50%" dy="35" class="bodytext">You may play this card only if you have a</tspan>
            <tspan x="50%" dy="35" class="bodytext">Mobster card on the Battlefield. Choose one</tspan>
            <tspan x="50%" dy="35" class="bodytext">opponent. Roll 1d6. That opponent discards</tspan>
            <tspan x="50%" dy="35" class="bodytext">that many cards from his Library,</tspan>
            <tspan x="50%" dy="35" class="bodytext">or all if he doesn't have that many.</tspan>
            <tspan x="50%" dy="35" class="bodytext">You may draw as many cards as were discarded.</tspan>
        </text>

</x-card>
