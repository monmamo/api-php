@push('background')
{{ view('Vendor.background') }}
<x-card.image-credit>Image by storyset on Freepik</x-card.image-credit>
{{-- https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm --}}
@endpush

<x-card :$cardNumber card-name="Mana Lottery">
    <image x="0" y="0" class="hero" href="@local(A146.jpg)" />
    <x-card.rulebox>
        <x-card.concept-card type="Vendor" />
        <x-card.concept-card type="Item">Item</x-card.concept>
            <text>
                <x-card.normalrule>Discard two or more cards from your hand.</x-card.normalrule>
                <x-card.normalrule>Lay your hand aside. Draw twice as many</x-card.normalrule>
                <x-card.normalrule>cards as you discarded. You may reveal any Mana</x-card.normalrule>
                <x-card.normalrule>cards you draw and put them in your hand.</x-card.normalrule>
                <x-card.normalrule>Put the remaining cards at the bottom of your Library,</x-card.normalrule>
                <x-card.normalrule>then shuffle your Library.</x-card.normalrule>
            </text>
    </x-card.rulebox>
</x-card>
