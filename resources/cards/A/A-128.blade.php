@push('background')
{{ view('Draw.background') }}
<image x="0" y="0" class="hero" href="@local(A128.png)" />
<x-card.flavortext>
    <x-card.flavortext.line>The less we hear from them, the better they are serving us.</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>Placeholder image</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Idiot Agents">
    <x-card.rulebox>
        <x-card.concept-card type="Draw" />
        <x-card.concept-card type="Integrity">1d4</x-card.concern-card>
            <x-slot:normal>
                <x-card.normalrule>Choose an opponent. That opponent removes all</x-card.normalrule>
                <x-card.normalrule>Monster cards from his Library and puts them in Discard.</x-card.normalrule>
            </x-slot:normal>
    </x-card.rulebox>
</x-card>
<?php
