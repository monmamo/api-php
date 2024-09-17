@push('background')
{{ view('Vendor.background') }}

<x-card.image-credit>Image by storyset on Freepik</x-card.image-credit>

{{-- https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm --}}

<x-card.flavortext>
    <x-card.flavortext.line>Can’t win if you don’t play!</x-card.flavortext.line>
</x-card.flavortext>
@endpush

<x-card :$cardNumber card-name="Lottery">
    <image x="0" y="0" class="hero" href="@local(A146.jpg)" />
    <x-card.concept-card type="Vendor" />
    <x-card.concept-card type="Item">Item</x-card.concept>

        <x-card.rulebox>
            <x-slot:normal>
                <x-card.normalrule>Discard two or more cards from your hand.</x-card.normalrule>
                <x-card.normalrule>Then draw that number plus two cards.</x-card.normalrule>
            </x-slot:normal>
        </x-card.rulebox>
</x-card>
