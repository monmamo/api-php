@push('background')
{{ view('Upkeep.background') }}
<x-card.flavortext>
</x-card.flavortext>
'image-credit' => "Image by USER_NAME on SERVICE",

@endpush

{{--  --}}

<x-card :$cardNumber :$dx :$dy card-name="Last Resort">
<image x="0" y="0" class="hero" href="@local(TODO.png)"  />

<x-card.concept.staticon type="Upkeep" :dx="1" />

       

</x-card>