<?php
$filesystem = \Illuminate\Support\Facades\Storage::disk('images');
$files = collect($filesystem 
->listContents('by-taxon/'.$slug)
->filter(function (\League\Flysystem\StorageAttributes $attributes) {
        return $attributes->isFile()  && \preg_match('/\\.(jpg|jpeg|png)$/', $attributes->path(), $matches) === 1;
    }));
?>

<div class="container">
    <div class="row">
        @foreach($files->splitIn(3)  as $chunk) 
            <div class="col-md-4 col-sm-6 mb-4">
                @foreach ($chunk as $image)
                <div class="card">
                    <img src="<?=  $filesystem->imageToUri($image->path()); ?>" class="card-img-top" >
                </div>
                @endforeach
            </div>
            @endforeach
    </div>
  </div>
