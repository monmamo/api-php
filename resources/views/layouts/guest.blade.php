<?php
\Illuminate\Support\Facades\Vite::useBuildDirectory('build');
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= transform($pageTitle ?? null, fn($t) => trim($t) . ' | ') ?>Monsters Masters & Mobsters</title>
     @vite('resources/js/app.js')
    <script src="https://unpkg.com/htmx.org@2.0.2"></script>
    <meta name="title" content="<?= $pageTitle ?? 'Monsters Masters & Mobsters' ?>">
    <meta property="og:title" content="<?= $pageTitle ?? 'Monsters Masters & Mobsters' ?>">
    <meta name="author" content="Monsters Masters & Mobsters LLC">
    <meta property="og:author" content="Monsters Masters & Mobsters LLC">
    <meta property="og:type" content="website">
    <meta property="twitter:type" content="website">
    <?= $meta ?? '' ?>
    <link rel="icon" href="<?=\Illuminate\Support\Facades\Storage::disk('images')->imageToUri("plain-logo-16.png") ?>" type="image/png">
    @stack('styles')
</head>

<?php
?>


<body> {{-- data-bs-spy="scroll" data-bs-target="#page-toc" data-bs-smooth-scroll="true" --}}

    <x-header />

    @isset($leftbar)
    <aside>
        <div class="flex-shrink-0 p-3" style="width: 280px;">
            <ul class="list-unstyled ps-0">
                {{$leftbar}}
            </ul>
        </div>

        <div class="b-example-divider b-example-vr"></div>

    </aside>
    @endisset

    @isset($title)
    {{$title}}
    @endisset

@isset($nav)
<div class="row">
    <div class="col-9">
        <div class="p-3">{{$slot}}</div>
    </div>
    <div class="col-3">
        <nav id="page-toc" class="h-100 flex-column align-items-stretch border-end"><nav class="nav nav-pills flex-column">{{$nav}}</nav></nav>
    </div>
</div>
@else
<main class="p-3">{{$slot}}</main>
@endisset

    <x-footer />

    <script>
        var contentId = null;

        async function load(contentId) {
            if (!contentId && contentId === '') throw 'Invalid contentId';

            const response = await fetch(`/cards/show/${contentId}`);

            if (!response.ok) {
                throw new Error(`Response status: ${response.status}`);
            }

            const rightSection = document.getElementById('right-section');
            rightSection.innerHTML = await response.text();

        }
    </script>
</body>

</html>
