<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= transform($pageTitle ?? null, fn($t) => trim($t) . ' | ') ?>Monsters Masters & Mobsters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/htmx.org@2.0.2"></script>
    <meta name="title" content="<?= $pageTitle ?? 'Monsters Masters & Mobsters' ?>">
    <meta property="og:title" content="<?= $pageTitle ?? 'Monsters Masters & Mobsters' ?>">
    <meta name="description" content="Monsters Masters & Mobsters is a speculative fiction concept that incorporates elements of magical realism, professional sports and organized (and disorganized) crime.">
    <meta property="og:description" content="Monsters Masters & Mobsters is a speculative fiction concept that incorporates elements of magical realism, professional sports and organized (and disorganized) crime.">
    <meta name="author" content="Monsters Masters & Mobsters LLC">
    <meta property="og:author" content="Monsters Masters & Mobsters LLC">
    <meta name="image" content="<?= asset('public/logo-white-on-black.png') ?>">
    <meta property="og:image" content="<?= asset('public/logo-white-on-black.png') ?>">
    <meta name="keywords" content="Monsters Masters & Mobsters, monsters, masters, mobsters, fantasy, speculative fiction,magical realism, storytelling, organized crime, professional sports, trainable monsters">
    <meta property="og:keywords" content="Monsters Masters & Mobsters, monsters, masters, mobsters, fantasy, speculative fiction,magical realism, storytelling, organized crime, professional sports, trainable monsters">
    <meta property="og:type" content="website">
    <meta property="twitter:type" content="website">
    <link rel="icon" href="data:image/jpg;base64,<?= \base64_encode(\file_get_contents(resource_path("images/plain-logo-16.png"))) ?>" type="image/png">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100%;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
    @stack('styles')
</head>

<?php
?>


<body data-bs-spy="scroll" data-bs-target="#page-toc" data-bs-smooth-scroll="true">
    <x-header />

    <aside class="bd-sidebar">
        @isset($leftbar)
        <div class="flex-shrink-0 p-3" style="width: 280px;">
            <ul class="list-unstyled ps-0">
                {{$leftbar}}
            </ul>
        </div>

        <div class="b-example-divider b-example-vr"></div>

        @endisset
    </aside>
    <main class="bd-main p-3">{{$slot}}</main>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
