@push('background')
<x-card.background fill="#000000" />
<x-card.flavortext>
</x-card.flavortext>
@endpush
<x-card :$cardNumber card-name="Salt">
    <text x="50%" y="30%" dominant-baseline="middle" text-anchor="middle" font-size="300" fill="#fff" fill-opacity="1">NaCl</text>
<x-card.concept.staticon type="Mana" :dx="2" />
<x-card.concept.staticon type="Material"  />
<text y="500">
</text>
</x-card>