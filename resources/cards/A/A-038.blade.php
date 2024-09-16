<x-card.image-credit>
Image by Freepik
</x-card.image-credit>
@endpush

@push('background')
{{ view('Defense.background') }}
@endpush


<x-card :$cardNumber card-name="Body Block" >
    <image x="0" y="0" class="hero" href="@local(AS02.jpg)" source="https://www.freepik.com/free-vector/jiu-jitsu-athletes-fighting_10369936.htm"/>
<x-card.rulebox>
    <x-card.concept-card type="Defense" />
    <x-slot:normal>Prevent Size÷2 damage (rounded up).</x-slot:normal>
</x-card.rulebox>
</x-card>
