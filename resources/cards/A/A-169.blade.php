@push('background')
{{ view('Vendor.background') }}
@endpush

<x-card :$cardNumber card-name="Merchandizing">
<x-card.rulebox>
<x-card.concept-card type="Vendor" />
<x-slot:normal>
    <x-card.normalrule>Discard a card from your hand</x-card.normalrule>
    <x-card.normalrule>to draw two cards from your Library.</x-card.normalrule>
    </x-slot:normal>
</x-card.rulebox>
</x-card.Vendor>
<?php
    <x-card.flavortext>
<x-card.flavortext.line>Where the real money from the concept is made.\</x-card.flavortext.line>
</x-card.flavortext> - Mel Brooks"
}