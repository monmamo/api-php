<?php
\Laravel\Folio\name('deck.png');
$deck = new \Canon\Deck($id);
?>
<html>
<div id="svg-container">
    <x-card-sheet :abreast="ceil(sqrt($deck->count()))" :cards="$deck->cards" :distinct_cards="$deck->distinctCards" />
</div>
<div id="img-container"></div>

<script>
    const dataHeader = 'data:image/svg+xml;charset=utf-8';
    const $svg = document.getElementById('svg-container').querySelector('svg'); // <svg> element
    const $holder = document.getElementById('img-container'); // <div> element

    const destroyChildren = $element => {
        while ($element.firstChild) {
            const $lastChild = $element.lastChild ?? false
            if ($lastChild) $element.removeChild($lastChild)
        }
    }

    const loadImage = async url => {
        const $img = document.createElement('img')
        $img.src = url
        return new Promise((resolve, reject) => {
            $img.onload = () => resolve($img)
            $img.onerror = reject
        })
    }

    const serializeAsXML = $e => (new XMLSerializer()).serializeToString($e)

    const encodeAsUTF8 = s => `${dataHeader},${encodeURIComponent(s)}`

    const convertSVGtoImg = format => async e => {
  const $btn = e.target

  destroyChildren($holder)

  const svgData = encodeAsUTF8(serializeAsXML($svg))

  const img = await loadImage(svgData)

  // https://www.w3schools.com/jsref/dom_obj_canvas.asp
  const $canvas = document.createElement('canvas')
  $canvas.width = $svg.clientWidth
  $canvas.height = $svg.clientHeight
  $canvas.getContext('2d').drawImage(img, 0, 0, $svg.clientWidth, $svg.clientHeight)

  const $img = new Image($svg.clientWidth, $svg.clientHeight);
  $img.src = await $canvas.toDataURL(`image/${format}`, 1.0);
  $holder.appendChild($img);
}

document.addEventListener('DOMContentLoaded', convertSVGtoImg('png'), false);

</script>

</html>
