@push('background')
{{ view('Vendor.background') }}
<image x="0" y="0" class="hero" href="@local(A040.png)" />
<x-card.image-credit>
    @ai
</x-card.image-credit>
<x-card.flavortext>
    <x-card.flavortext.line>The quick stop for everything you forgot at the Big-Box Store (A-014).</x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber card-name="Convenience Store">
    
        <x-card.concept.staticon type="Vendor" x="530" />
        <x-card.concept.staticon type="Integrity" x="530" >1d6</x-card.concern-card>
            <text>
                <x-card.normalrule>Discard 1d4 cards from your hand.</x-card.normalrule>
                <x-card.normalrule>Search your Library for one Item card. </x-card.normalrule>
                <x-card.normalrule>Reveal it, then put it in your hand.</x-card.normalrule>
                <x-card.normalrule>Shuffle your library.</x-card.normalrule>
                <x-card.normalrule>You may perform another Draw phase action.</x-card.normalrule>
            </text>
    
</x-card>
