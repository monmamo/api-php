@push('background')
{{ view('Vendor.background') }}
<x-card.image-credit>
  @ai
  </x-card.image-credit>
  @endpush

<x-card :$cardNumber card-name="Personal Shopper" >
  <image class="hero" href="@local(hero/personal-shopper.jpg)" />
  <x-card.concept.staticon type="Vendor" x="482" /> 
  <x-card.concept.staticon type="Integrity"  value="1d6" />

  <x-card.phaserule type="Draw"  height="170">
      <text >    
<x-card.normalrule>Search your deck for up to 3 Item cards.</x-card.normalrule>
<x-card.normalrule>Show them to your opponent,</x-card.normalrule>
<x-card.normalrule>and put them into your hand.</x-card.normalrule>
<x-card.normalrule>Shuffle your deck afterward.</x-card.normalrule>
</text></x-card.phaserule>  </x-card>