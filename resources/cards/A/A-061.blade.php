@push('background')
{{ view('Trait.background') }}
<x-card.image-credit>
  Image by freepik {{-- https://www.freepik.com/free-vector/hand-drawn-werewolf-silhouette_59740170.htm --}}
  </x-card.image-credit>
  @endpush

<x-card :$cardNumber card-name="Dire Form">

  <image x="100" y="0"  href="@local(hero/dire-form.png)" />
    'concepts' => ['Trait'], 
    <text><x-card.normalrule>Size +5. Speed +3.</x-card.normalrule></text>
</x-card>