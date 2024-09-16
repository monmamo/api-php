@push('background')
{{ view('Bystander.background') }}
<x-card.image-credit>
    @ai(head coach standing on the sidelines with a clipboard, green jacket)
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Head Coach">

  <image x="0" y="0" class="hero" href="@local(A-118.jpg)" />
    {{-- https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2FIxh_tN82S1.png?alt=media&token=b136d928-3f29-4984-bb49-4521a932ef5a --}}

  <x-card.rulebox>
    <x-card.concept.row>
    <x-card.concept.card type="Master" x="0" width="95" />
    <x-card.concept.card type="Coach" x="95" width="95" />
    <x-card.concept.card type="Male" x="190" width="380" />
    <x-card.concept.card type="Integrity" x="380" width="230" >1d6+4</x-card.concept>
    </x-card.concept.row>

    <x-card.rulebox>
<x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
<x-card.smallrule>You may choose to make this card Female when you put it on the Battlefield.</x-card.smallrule>

    <x-card.phaserule type="Resolution" y="135" height="100">
        <text >
<x-card.normalrule>Your Monsters' attacks</x-card.normalrule>
<x-card.normalrule>do 1d6 more damage and</x-card.normalrule>
<x-card.normalrule>defenses prevent 1d6 more damage.</x-card.normalrule>
</text>
</x-card.phaserule>

</x-card.rulebox>
</x-card>