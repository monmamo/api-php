@push('background')
{{ view('Draw.background') }}
<x-card.image-credit>
    Image by Adobe: Stock #58908676
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Busybody">
    <image x="0" y="0" class="hero" href="@local(A025.jpeg)" />
    <x-card.rulebox>
        <x-card.concept-card type="Draw" />
        <text y="80" filter="url(#solid)">
            <x-card.normalrule>Choose an opponent. That opponent</x-card.normalrule>
            <x-card.normalrule>reveals their hand. Choose one card.</x-card.normalrule>
            <x-card.normalrule>The opponent puts that card</x-card.normalrule>
            <x-card.normalrule>on the bottom of their Library.</x-card.normalrule>
            </x-slot:normal>
    </x-card.rulebox>
</x-card>
