<?php

    "image": {
        <image x="0" y="0" class="hero" href="@local(A186.jpg)" />
        <x-card.image-credit>Image by fxquadro on Freepik</x-card.image-credit>
@endpush

    },
    <x-card.rulebox>
        <x-slot:normal>
<x-card.normalrule>Limit 1 on Battlefield among all players</x-card.normalrule>
<x-card.normalrule>During your opponents' Draw phase,</x-card.normalrule>
<x-card.normalrule>they must let you draw a card of your own,</x-card.normalrule>
<x-card.normalrule>or discard two of their own cards.</x-card.normalrule>
</x-slot:normal>
</x-card.rulebox>
 [
@push('background')
{{ view('Mobster.background') }}
@endpush

<x-card :$cardNumber card-name="Neighborhood \"Protection\"">
<x-card.concept-card type="Mobster" /> 

</x-card>
    "flavor_text": [
    Nice monster team you got there.
    Would be a shame if something happened to it.
    ],
    <x-card.concept-card type="Integrity">1d4</x-card.concern-card>
    "stats": [

    ]
}
