@props(['start','end'])
<defs><linearGradient x1="0" x2="1" y1="1" y2="0" id="background-gradient"><stop offset="0%" stop-color="{{\App\Enums\Color::rbgCode($start)}}" stop-opacity="1"></stop><stop offset="100%" stop-color="{{\App\Enums\Color::rbgCode($end)}}" stop-opacity="1"></stop></linearGradient></defs>
<path d="M0 0h750v1050H0z" fill="url(#background-gradient)"></path>

