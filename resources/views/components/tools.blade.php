<div class="modal fade" id="dice-modal" tabindex="-1" aria-labelledby="dice-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="dice-modal-label">Roll Dice</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <p>Click a die to roll it.</p>
                <div class="container-fluid">
                    <div class="row">
                        @foreach([4,6,10,12,20] as $number)
                        <div class="col">
                            <svg onclick="apply({{$number}})" id="d{{$number}}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="height: 64px; width: 64px;" fill="#0000C0" fill-opacity="1">{{ view('icons.dice.d'.$number) }}</svg>
                        </div>
                        @endforeach
                    </div>
                </div>


                <table class="table">
                    <tr>
                        <td>Dice rolled:</td>
                        <td class="text-end"><output id="roll"></output></td>
                    </tr>
                    <tr>
                        <td>Results:</td>
                        <td class="text-end"><output id="results"></output></td>
                    </tr>
                    <tr>
                        <td>Sum:</td>
                        <td class="text-end"><output id="sum">0</output></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button onclick="clearForm()" type="button" class="btn btn-secondary">Clear Rolls</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="d6-modal" tabindex="-1" aria-labelledby="d6-modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="d6-modal-title">1d6</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-primary">
            </div>
        </div>
    </div>
</div>

@foreach([1,2,3,4,5,6] as $number)
<template id="d6-side{{$number}}">
<svg height="400" width="400" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#ffffff">
{{ view('icons.d6.'.$number) }}
</svg>
</template>
@endforeach


<script>
    const d6ModalElement = document.getElementById('d6-modal');
    const modalBody = d6ModalElement.querySelector('.modal-body')
    d6ModalElement.addEventListener('show.bs.modal', event => {
        const ref = '#d6-side' + Math.floor(Math.random() * 6 + 1);
modalBody.innerHTML = document.querySelector(ref).innerHTML;
    });
    var sum = 0;

    function apply(roll) {
        document.getElementById('roll').value += '[1d' + roll + ']';
        const result = Math.floor(roll * Math.random() + 1);
        document.getElementById('results').value += '[' + result + ']';
        document.getElementById('sum').value = (sum += result);
    }

    function clearForm() {
        document.getElementById('roll').value = '';
        document.getElementById('results').value = '';
        document.getElementById('sum').value = '0';
        sum = 0;
    }
</script>
