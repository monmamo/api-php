
<ul  class="dropdown-menu" id="img-menu" style="display: none; position: absolute; background: white; border: 1px solid black; list-style: none; padding: 5px;">
    <li class="open-svg">SVG</li>
      <li data-format="png">PNG</li>
    <li data-format="jpeg">JPG</li>
    <li data-format="webp">WEBP</li>
  </ul>

  <div id="img-container"></div>

  <script>
    const dataHeader = 'data:image/svg+xml;charset=utf-8';
    const $svg = document.querySelector('svg.has-context-menu'); // <svg> element
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
    
      //const $img = new Image($svg.clientWidth, $svg.clientHeight);
      //$img.src = await $canvas.toDataURL(`image/${format}`, 1.0);
      //$holder.appendChild($img);
      const imgsrc = await $canvas.toDataURL(`image/${format}`, 1.0);
const blob = await fetch(imgsrc).then(r => r.blob());
var blobUrl = URL.createObjectURL(blob);
window.location.assign(blobUrl);
    }

    for (const btn of [...document.querySelectorAll('[data-format]')]) {
      btn.onclick = convertSVGtoImg(btn.dataset.format)
    }


const customMenu = document.getElementById('img-menu');

$svg.addEventListener('contextmenu', (event) => {
event.preventDefault();
customMenu.style.top = `${event.clientY}px`;
customMenu.style.left = `${event.clientX}px`;
customMenu.style.display = 'block';
});

document.addEventListener('click', () => {
customMenu.style.display = 'none';
});
        </script>  