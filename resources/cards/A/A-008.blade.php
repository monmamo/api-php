{{-- "dark man in a mask wearing a trenchcoat carrying a large tote bag" --}}

@push('background')
<image x="0" y="0"  href="@local(A-008-full.png)" />
<x-card.image-credit>
    @ai 
    </x-card.image-credit>
    @endpush
    
<x-card.flavortext>
<x-card.flavortext.line>Just collecting the dues.</x-card.flavortext.line>
</x-card.flavortext>

<x-card :$cardNumber card-name="Bagman">
    
    <x-card.concept-card type="Vendor" y="500" />
    <x-card.concept-card type="Integrity" y="500" index="1">1d4</x-card.concern-card>
        <text x="50%" y="620" width="100%" height="auto" filter="url(#solid)">
            <x-card.normalrule>You may play this card only if you have a</x-card.normalrule>
            <x-card.normalrule>Mobster card on the Battlefield. Choose one</x-card.normalrule>
            <x-card.normalrule>opponent. Roll 1d6. That opponent discards</x-card.normalrule>
            <x-card.normalrule>that many cards from his Library,</x-card.normalrule>
            <x-card.normalrule>or all if he doesn't have that many.</x-card.normalrule>
            <x-card.normalrule>You may draw as many cards as were discarded.</x-card.normalrule>
        </text>

</x-card>
