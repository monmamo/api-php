@push('background')
{{ view('Vendor.background') }}
<x-card.image-credit>
    @ai
</x-card.image-credit>
<x-card.flavortext>
    <x-card.flavortext.line>The quick stop for everything you forgot</x-card.flavortext.line> 
        <x-card.flavortext.line>at the Big-Box Store (A-014).</x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber card-name="Convenience Store">
    <image x="0" y="0" class="hero" href="@local(A040.png)" />
    
        <x-card.concept.staticon type="Vendor" :dx="2" />
        <x-card.concept.staticon type="Integrity" value="1d4" />

        <x-card.phaserule type="Draw" height="210" badge="Repeat">
            <text>
                <x-card.normalrule>Discard 1d4 cards from your hand.</x-card.normalrule>
                <x-card.normalrule>Search your Library for one Item card. </x-card.normalrule>
                <x-card.normalrule>Reveal it, then put it in your hand.</x-card.normalrule>
                <x-card.normalrule>{{__('rules.SHUFFLE')}}</x-card.normalrule>
                <x-card.normalrule>{{__('rules.REDRAW')}}</x-card.normalrule>
            </text>
        </x-card.phaserule>
</x-card>
