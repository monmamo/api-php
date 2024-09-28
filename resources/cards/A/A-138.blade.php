@push('background')
{{ view('Vendor.background') }}
'image-credit' => "Image by storyset on Freepik",

{{-- https://www.freepik.com/free-vector/lottery-ticket-concept-illustration_171056284.htm --}}
@endpush

<x-card :$cardNumber :$dx :$dy card-name="Mana Lottery">
    <image x="0" y="0" class="hero" href="@local(A146.jpg)" />
    
        'concepts' => ['Vendor'],
        'concepts' => ['Integrity'],

<x-card.phaserule type="Draw" lines="6"><text>    
<x-card.normalrule>Discard 2+ cards from your hand.</x-card.normalrule>
<x-card.normalrule>Lay your hand aside. Draw twice as many</x-card.normalrule>
<x-card.normalrule>cards as you discarded. You may reveal any</x-card.normalrule>
<x-card.normalrule>Mana cards you draw and put them in your </x-card.normalrule>
<x-card.normalrule>hand. Put the remaining cards at the bottom</x-card.normalrule>
<x-card.normalrule>of your Library, then shuffle your Library.</x-card.normalrule>
</text></x-card.phaserule>
    
</x-card>
