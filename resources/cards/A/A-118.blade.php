@push('background')
{{ view('Bystander.background') }}
<x-card.image-credit>
    @ai(head coach standing on the sidelines with a clipboard, green jacket)
</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Head Coach">

  <image x="0" y="0" class="hero" href="@local(hero/head-coach.png)" />
    {{-- https://firebasestorage.googleapis.com/v0/b/firescript-577a2.appspot.com/o/imgs%2Fapp%2FMonMaMo%2FIxh_tN82S1.png?alt=media&token=b136d928-3f29-4984-bb49-4521a932ef5a --}}

  
    
    <x-card.concept.staticon type="Master" :dx="4" />
    <x-card.concept.staticon type="Coach" />
    <x-card.concept.staticon type="Male"  />
    <x-card.concept.staticon type="Integrity" value="1d6+4" />
    

    <text y="500" filter="url(#solid)">
        <x-card.smallrule>Limit 1 per player on Battlefield. </x-card.smallrule>
<x-card.smallrule>You may choose to make this card Female </x-card.smallrule>
    <x-card.smallrule>when you put it on the Battlefield.</x-card.smallrule>
    </text>

    <x-card.phaserule type="Resolution" :lines="3">
        <text >
<x-card.normalrule>Your Monsters' attacks</x-card.normalrule>
<x-card.normalrule>do 1d6 more damage and</x-card.normalrule>
<x-card.normalrule>defenses prevent 1d6 more damage.</x-card.normalrule>
</text>
</x-card.phaserule>


</x-card>