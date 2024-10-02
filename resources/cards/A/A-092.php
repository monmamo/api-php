@push('background')
<x-linear-gradient-background start="#3c2600" end="#b57200" />

<defs><filter id="shadow" height="300%" width="300%" x="-100%" y="-100%"><feFlood flood-color="rgba(200, 150, 45, 1)" result="flood"></feFlood><feComposite in="flood" in2="SourceGraphic" operator="atop" result="composite"></feComposite><feGaussianBlur in="composite" stdDeviation="10" result="blur"></feGaussianBlur><feOffset dy="0" result="offset"></feOffset><feComposite in="SourceGraphic" in2="offset" operator="over"></feComposite></filter></defs>
<g transform="translate(75,0) scale(5.4)" fill="#8b572a" fill-opacity="1" filter="url(#shadow)"> <path d="M85.735,64.46c7.183-0.157,12.88-6.127,12.701-13.302c-0.157-7.193-6.123-12.884-13.306-12.706  c-7.182,0.159-12.878,6.122-12.702,13.3C72.584,58.938,78.54,64.616,85.735,64.46z"/><path d="M17.602,77.294c0.004,0,0.009,0,0.009,0l11.658,0.026c0,0,1.32-14.877,1.395-15.266c0.187-5.538,4.815-10.529,10.411-10.538  l19.487-0.061c4.926,0,8.492,2.668,10.358,7.604l10.786,25.825c1.101,2.563-0.085,5.54-2.646,6.633  c-0.651,0.284-1.325,0.412-1.992,0.412c-1.963,0-3.824-1.146-4.642-3.059l-6.856-16.657l-23.62,0.043l-1.03,11.696  c-0.271,3.146-2.909,5.562-6.068,5.562c-0.005,0-0.009,0-0.009,0L17.59,89.48c-3.367-0.004-6.086-2.743-6.081-6.103  C11.513,80.018,14.241,77.294,17.602,77.294z"/><path d="M24.917,37.15c0,1.589-1.288,2.879-2.865,2.879c-1.59,0-2.88-1.29-2.88-2.879c0-1.582,1.29-2.87,2.88-2.87  C23.63,34.28,24.917,35.568,24.917,37.15z"/><path d="M44.468,30.446c0,1.59-1.287,2.879-2.864,2.879c-1.591,0-2.88-1.29-2.88-2.879c0-1.581,1.29-2.869,2.88-2.869  C43.182,27.577,44.468,28.865,44.468,30.446z"/><path d="M37.765,41.619c0,1.59-1.287,2.879-2.865,2.879c-1.591,0-2.88-1.29-2.88-2.879c0-1.582,1.29-2.87,2.88-2.87  C36.478,38.749,37.765,40.037,37.765,41.619z"/><path d="M33.296,24.301c0,1.59-1.287,2.879-2.864,2.879c-1.591,0-2.88-1.29-2.88-2.879c0-1.58,1.29-2.869,2.88-2.869  C32.009,21.432,33.296,22.721,33.296,24.301z"/><path d="M23.8,47.764c0,1.588-1.288,2.878-2.865,2.878c-1.59,0-2.88-1.29-2.88-2.878c0-1.582,1.29-2.87,2.88-2.87  C22.513,44.894,23.8,46.182,23.8,47.764z"/><path d="M10.501,56.704c0,1.59-1.288,2.881-2.865,2.881c-1.591,0-2.88-1.291-2.88-2.881c0-1.579,1.29-2.868,2.88-2.868  C9.213,53.836,10.501,55.125,10.501,56.704z"/><path d="M7.042,31.005c0,1.59-1.287,2.879-2.865,2.879c-1.591,0-2.88-1.29-2.88-2.879c0-1.581,1.29-2.869,2.88-2.869  C5.755,28.136,7.042,29.424,7.042,31.005z"/><path d="M20.449,28.212c0,1.59-1.287,2.879-2.865,2.879c-1.591,0-2.88-1.29-2.88-2.879c0-1.581,1.29-2.869,2.88-2.869  C19.162,25.343,20.449,26.631,20.449,28.212z"/><path d="M20.449,11.454c0,1.589-1.287,2.879-2.865,2.879c-1.591,0-2.88-1.29-2.88-2.879c0-1.581,1.29-2.869,2.88-2.869  C19.162,8.585,20.449,9.873,20.449,11.454z"/> </g>

'flavor-text' => [
'The smell is the least of your worries.'
],

<x-card.image-credit>Image by Luis Prado via The Noun Project</x-card.image-credit>
@endpush

<x-card :$cardNumber card-name="Flatus">
    
        'concepts' => ['Bane'],

        <text y="500" filter="url(#solid)">
                <x-card.smallrule>{{trans_choice('rules.monster-limit',1)}}</x-card.smallrule>
                </text >
                
            <x-card.phaserule type="Resolution" y="185" height="130">
                <text >    
<x-card.normalrule>Roll 1d6.</x-card.normalrule>
<x-card.normalrule>@dieroll(1,2) Discard this card.</x-card.normalrule>
<x-card.normalrule>@dieroll(3) Each other Monster takes 1 damage.</x-card.normalrule>
<x-card.normalrule>@dieroll(4) Each other Monster takes 2 damage.</x-card.normalrule>
<x-card.normalrule>@dieroll(5) Each other Monster takes 3 damage.</x-card.normalrule>
<x-card.normalrule>@dieroll(6) Each other Monster takes 4 damage.</x-card.normalrule>
        </text>

</x-card>
