

@php
$name = 'concept-'.$slot;
$id = 'btn-'.$slot.'-check';
$checked = $attributes->get('checked', $_GET[$name] ?? false);
@endphp

<input type="checkbox" name="{{$name}}" class="btn-check" id="{{$id}}" autocomplete="off" {{$checked ? 'checked' : ''}}>
<label class="btn btn-primary" for="{{$id}}"><x-icons.inline.concept fill="white" size="45">{{$slot}}</x-icons.inline.concept></label>