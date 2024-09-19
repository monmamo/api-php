@push('background')
{{ view('Drone.background') }}
<image x="0" y="0" class="hero" href="@local(A127.jpg)" />
<x-card.image-credit>@ai</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Hypnotic Drone">

    <x-card.concept.staticon type="Drone" x="530" />
    <x-card.normalrule>If an opponent's Moster, Master, Mobster or Bystander</x-card.normalrule>
    <x-card.normalrule>attempts any attack, defense, skill or effect,</x-card.normalrule>
    <x-card.normalrule>you may choose to roll 1d6. If ⚀⚁, that move has no effect.</x-card.normalrule>

    </x-card.Drone>
    <?php
    // <x-card.concept.staticon type="Speed"    value="10" />
    // <x-card.concept.staticon type="Size"    value="10" />
    // <x-card.concept.staticon type="DamageCapacity"    value="20" />
