@props(['id', 'title' => null])

<?php
$id = $id ?? md5($attributes->wire('model'));
?>


<div class="modal fade" id="{{$id}}" tabindex="-1" aria-labelledby="{{$id}}-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="{{$id}}-title">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">{{$body}}</div>
            <div class="modal-footer">{{$footer}}</div>
        </div>
    </div>
</div>
