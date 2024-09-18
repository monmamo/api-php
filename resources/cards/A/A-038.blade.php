@push('background')
{{ view('Defense.background') }}
<x-card.image-credit>Image by Freepik</x-card.image-credit>
@endpush


<x-card :$cardNumber card-name="Body Block" >
    <image x="0" y="0" class="hero" href="@local(AS02.jpg)" source="https://www.freepik.com/free-vector/jiu-jitsu-athletes-fighting_10369936.htm"/>

    <x-card.concept.staticon type="Defense" x="530" />
    <text>Prevent Size÷2 damage (rounded up).</text>

</x-card>
