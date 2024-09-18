@push('background')
{{ view('Bane.background') }}
<x-card.flavortext>
<x-card.flavortext.line>Ouuuuuch....</x-card.flavortext.line>
</x-card.flavortext>

<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush
{{-- https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2F0lqNV7_F94.jpeg?alt=media&token=78f7b026-4cd1-49a6-8fc0-2c1d2692f962 --}}

<x-card :$cardNumber card-name="Tranquilizer Dart">
    <image x="0" y="0" class="hero" href="@local(A306.jpeg)"  />
    <x-card.concept.staticon type="Bane" x="402" y="370"/>
    <x-card.concept.staticon type="Item" x="466"  y="370" />
    <x-card.concept.staticon type="Weapon" x="530"  y="370" />

    <use href="#limit-1-per-monster" y="500"  />

    <x-card.phaserule type="Upkeep"  height="100">
        <text >    
<x-card.normalrule>For 1d4 turns (including this one),</x-card.normalrule>
<x-card.normalrule>apply Paralysis.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card>