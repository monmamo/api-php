<x-card.flavortext>
<x-card.flavortext.line>Ouuuuuch....</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush
{{-- https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2F0lqNV7_F94.jpeg?alt=media&token=78f7b026-4cd1-49a6-8fc0-2c1d2692f962 --}}

<x-card concepts="Draw" />

<x-card :$cardNumber card-name="Tranquilizer Dart" concepts="Bane;Item;Weapon">
    <image x="0" y="0" class="hero" href="@local(A306.jpeg)"  />

    <x-card.rulebox>
        <x-slot:normal>
For 1d4 turns (including this one),
apply Paralysis.
    </x-slot:normal>
    </x-card.rulebox>

</x-card>