@push('background')
{{ view('Bane.background') }}
'flavor-text' => [
'Ouuuuuch....'
],

<x-card.image-credit>
@ai
</x-card.image-credit>
@endpush
{{-- https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2F0lqNV7_F94.jpeg?alt=media&token=78f7b026-4cd1-49a6-8fc0-2c1d2692f962 --}}

<x-card :$cardNumber card-name="Tranquilizer Dart">
    <image x="0" y="0" class="hero" href="@local(A306.jpeg)"  />
    'concepts' => ['Bane'],
    'concepts' => ['Item'],
    'concepts' => ['Weapon'],

    <text y="500" filter="url(#solid)">
        <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
        </text >

    <x-card.phaserule type="Upkeep"  height="100">
        <text >    
<x-card.normalrule>For 1d4 turns (including this one),</x-card.normalrule>
<x-card.normalrule>apply Paralysis.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card>