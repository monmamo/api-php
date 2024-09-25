@push('background')
{{ view('Drone.background') }}
'image-credit' => "@ai",

@endpush

<x-card :$cardNumber :$dx :$dy card-name="Hypnotic Drone">
    <image x="0" y="0" class="hero" href="@local(hero/hypnotic-drone.jpeg)" />

    <x-card.concept.staticon type="Drone" :dx="6" />
    <x-card.concept.staticon type="Item" />
    <x-card.concept.staticon type="DamageCapacity" value="20" />
    <x-card.concept.staticon type="Level" value="7" />
    <x-card.concept.staticon type="Size" value="10" />
    <x-card.concept.staticon type="Speed" value="10" />

    <x-card.phaserule type="Resolution" lines="4"><text>
    <x-card.normalrule>If an opponent's Moster, Master,</x-card.normalrule>
    <x-card.normalrule>Mobster or Bystander attempts any attack,</x-card.normalrule> 
        <x-card.normalrule>defense, skill or effect, you may choose to </x-card.normalrule>
    <x-card.normalrule>roll 1d6. If @dieroll(1,2), that move has no effect.</x-card.normalrule>
</text></x-card.phaserule>
</x-card>
