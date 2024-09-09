<?php

    <x-slot:card-rules>

</x-slot:card-rules>
 [
For 1d4 turns (including this one),
apply Paralysis.
<x-card.Bane :$cardNumber card-name="Tranquilizer Dart">

</x-card.Bane>
    @push('flavor-text')
<x-card.flavor-text-line>Ouuuuuch....</x-card.flavor-text-line>
@endpush,
    "image": {
        <image x="0" y="0" class="hero" href="@local(A306.jpeg)" />
{{-- unknown --}}
        @push('image-credit')
@ai
@endpush,
{{-- https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2F0lqNV7_F94.jpeg?alt=media&token=78f7b026-4cd1-49a6-8fc0-2c1d2692f962 --}}
    },
    #[\App\GeneralAttributes\Title('')]
    "stats": [
Item","Weapon
    ]
}