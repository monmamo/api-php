@push('background')
{{ view('Drone.background') }}
'image-credit' => "@ai",

@endpush

<x-card :$cardNumber :$dx :$dy card-name="Hypnotic Drone">
    <image x="0" y="0" class="hero" href="@local(hero/hypnotic-drone.jpeg)" />

    'concepts' => ['Drone'],
    'concepts' => ['Item'],
    'concepts' => ['DamageCapacity'],
    'concepts' => ['Level'],
    'concepts' => ['Size'],
    'concepts' => ['Speed'],

    <x-card.phaserule type="Resolution" lines="4"><text>
    <x-card.normalrule>If an opponent's Moster, Master,</x-card.normalrule>
    <x-card.normalrule>Mobster or Bystander attempts any attack,</x-card.normalrule> 
        <x-card.normalrule>defense, skill or effect, you may choose to </x-card.normalrule>
    <x-card.normalrule>roll 1d6. If @dieroll(6,5), that move has no effect.</x-card.normalrule>
</text></x-card.phaserule>
</x-card>
