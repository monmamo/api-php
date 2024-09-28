@push('background')
{{ view('Vendor.background') }}
<x-card.image-credit>
    @ai
</x-card.image-credit>
'flavor-text' => [
    'The quick stop for everything you forgot' 
        'at the Big-Box Store (A-014).'
],
@endpush

<x-card :$cardNumber card-name="Convenience Store">
    <image x="0" y="0" class="hero" href="@local(A040.png)" />
    
        'concepts' => ['Vendor'],
        'concepts' => ['Integrity'],

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
