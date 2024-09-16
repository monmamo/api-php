<?php
$card_number_pieces =  explode('-', $card_number);
$set = $card_number_pieces[0];

$previous = match(true) {
  is_numeric(last( $card_number_pieces)) => transform(
    $card_number_pieces ,
    function(array $pieces){
      $pieces[count($pieces)-1] -= 1;
      return implode('-',$pieces);
    }
  ),
  default => null
};

$next = match(true) {
  is_numeric(last( $card_number_pieces)) => transform(
    $card_number_pieces ,
    function(array $pieces){
      $pieces[count($pieces)-1] += 1;
      return implode('-',$pieces);
    }
  ),
  default => null
};

 
if (!\Illuminate\Support\Facades\View::exists("$set.$card_number")) {
    abort(404);
    exit;
}

$view = view("$set.$card_number")->with('cardNumber', $card_number)->with('cardSet', $set);

// if (isset($_REQUEST['png'] )) {
//      \header('Content-Type: image/png');
//      \header('Content-Disposition: attachment; filename="'.$card_number.'.png"');
//         echo   \Spatie\Browsershot\Browsershot::html($view)->screenshot();        
//     return;
// }


// if (isset($_REQUEST['download'] )) 
// \header('Content-Disposition: attachment; filename="'.$card_number.'.svg"');

$filepath = resource_path("cards/$set/$card_number.blade.php");
assert(!empty($filepath));
assert(file_exists($filepath));
$edit_url = "vscode://file/".urlencode($filepath);

?>
<html>

<div class="item buttons">
  @isset($previous)
  <a id="btn-previous" href="/cards/card/{{$previous}}">{{$previous}}</a>
    @endisset
  <button id="btn-png" data-format="png">PNG</button>
  <button id="btn-jpg" data-format="jpeg">JPG</button>
  <button id="btn-webp" data-format="webp">WEBP</button>

  <a href="<?= $edit_url ?>">Edit</a>

  @isset($next)
  <a id="btn-next" href="/cards/card/{{$next}}">{{$next}}</a>
    @endisset
</div>
  <div id="svg-container" hx-get="#"  hx-trigger="dblclick"
  hx-target="#svg-container">{{$view}}</div>
  <div id="img-container"></div>

<script>
const dataHeader = 'data:image/svg+xml;charset=utf-8'
const $svg = document.getElementById('svg-container').querySelector('svg')
const $holder = document.getElementById('img-container')

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
const encodeAsB64 = s => `${dataHeader};base64,${btoa(s)}`

const convertSVGtoImg = async e => {
  const $btn = e.target
  const format = $btn.dataset.format ?? 'png'

  destroyChildren($holder)

  const svgData = encodeAsUTF8(serializeAsXML($svg))

  const img = await loadImage(svgData)
  
  const $canvas = document.createElement('canvas')
  $canvas.width = $svg.clientWidth
  $canvas.height = $svg.clientHeight
  $canvas.getContext('2d').drawImage(img, 0, 0, $svg.clientWidth, $svg.clientHeight)
  
  const dataURL = await $canvas.toDataURL(`image/${format}`, 1.0)
  
  const $img = new Image($svg.clientWidth, $svg.clientHeight);
  $img.src = dataURL;
  $holder.appendChild($img);
}

const buttons = [...document.querySelectorAll('[data-format]')]
for (const btn of buttons) {
  btn.onclick = convertSVGtoImg
}
    </script>
    </html>