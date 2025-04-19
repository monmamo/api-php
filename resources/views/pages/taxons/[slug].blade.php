<x-taxon-page :$slug >


    <h2>Examples of {{$slug}} Anthropes and Monsters</h2>

    <p>
        image prompt: <span id="image-prompt">image prompt</span>
    </p>
    <button class="btn btn-primary" onclick="copyContent()">Copy</button>
    <script>
        let text = document.getElementById('image-prompt').innerHTML;
  const copyContent = async () => {
    try {
      await navigator.clipboard.writeText(text);
      console.log('Content copied to clipboard');
    } catch (err) {
      console.error('Failed to copy: ', err);
    }
  }
        </script>

    <x-taxon-gallery :$slug />

</x-taxon-page>

