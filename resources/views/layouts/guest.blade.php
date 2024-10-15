<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monsters Masters & Mobsters Card Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/htmx.org@2.0.2"></script>
    <meta name="title" content="Monsters Masters & Mobsters">
    <meta property="og:title" content="Monsters Masters & Mobsters">
    <meta name="description" content="Monsters Masters & Mobsters is a speculative fiction concept that incorporates elements of magical realism, professional sports and organized (and disorganized) crime.">
    <meta property="og:description" content="Monsters Masters & Mobsters is a speculative fiction concept that incorporates elements of magical realism, professional sports and organized (and disorganized) crime.">
    <meta name="author" content="Monsters Masters & Mobsters LLC">
    <meta property="og:author" content="Monsters Masters & Mobsters LLC">
    <meta name="image" content="https://assets.cdn.filesafe.space/3vVAHmly2NuweaJs74jQ/media/66874211e38553385d6e377a.png">
    <meta property="og:image" content="https://assets.cdn.filesafe.space/3vVAHmly2NuweaJs74jQ/media/66874211e38553385d6e377a.png">
    <meta name="keywords" content="Monsters Masters & Mobsters, monsters, masters, mobsters, fantasy, speculative fiction,magical realism, storytelling, organized crime, professional sports, trainable monsters">
    <meta property="og:keywords" content="Monsters Masters & Mobsters, monsters, masters, mobsters, fantasy, speculative fiction,magical realism, storytelling, organized crime, professional sports, trainable monsters">
    <meta property="og:type" content="website">
    <meta property="twitter:type" content="website">
</head>

<?php
?>


<body>
    <header class="navbar navbar-expand-lg bd-navbar sticky-top bg-dark-subtle">
        <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap">
                <a class="navbar-brand" href="/"><x-application-mark width="40" height="32" /> Monsters Masters &amp; Mobsters</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/news">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/lore">Lore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sets</a>
                            <ul class="dropdown-menu">
                                <?php foreach (\App\Enums\CardSet::cases() as $set) { ?>
                                    <li><a class="dropdown-item" href="#"><?= sprintf('%s (%s)', $set->name, $set->value) ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Concepts</a>
                        <ul class="dropdown-menu">
                            @foreach(\App\Concept::all() as $concept)
                            <li><a class="dropdown-item" href="#">{{$concept}}</a></li>
                            @endforeach
                        </ul>
                        </li>

                    </ul>
                <a class="navbar-brand" href="https://www.facebook.com/people/Monsters-Masters-Mobsters/61559695048144/" aria-label="Facebook" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/facebook-square.svg" alt="social media icon" class="social-media-icon">
                </a>
                <a class="navbar-brand" href="https://x.com/monmamoverse" aria-label="X" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/x-square.svg" alt="social media icon" class="social-media-icon">
                </a>
                <a class="navbar-brand" href="https://www.instagram.com/monmamoverse" aria-label="Instagram" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/instagram-square.svg" alt="social media icon" class="social-media-icon">
                </a>
                <a class="navbar-brand" href="https://pinterest.com/monmamoverse" aria-label="Pinterest" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/pinterest-square.svg" alt="social media icon" class="social-media-icon">
                </a>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            </div>
        </nav>
    </header>

    <main class="container-fluid">
        {{$slot}}
    </main>


    <footer class="bd-footer py-4 py-md-5 mt-5 bg-dark-subtle ">
        <div class="container py-4 py-md-5 px-4 px-md-3 ">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Homepage">
                        <x-application-mark width="40" height="32" />
                        <span class="fs-5">Monsters Masters &amp; Mobsters</span>
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Monsters Masters &amp; Mobsters LLC</li>
                        <li class="mb-2">MAILING ADDRESS</li>
                        <li class="mb-2">Ponchatoula, LA 70454</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Home</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/news">News</a></li>
                        <li class="mb-2"><a href="/lore">Lore</a></li>
                        <li class="mb-2"><a href="/events">Events</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Products</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/docs/5.3/getting-started/">Getting started</a></li>
                        <li class="mb-2"><a href="/docs/5.3/examples/starter-template/">Starter template</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Cards and Card Game</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/cards" target="_blank" rel="noopener">Home</a></li>
                        <li class="mb-2"><a href="/cards/deck/sdv-library">SDV Library</a></li>
                        <li class="mb-2"><a href="/cards/deck/pdv-e">PDV Electricty Starter</a></li>
                        <li class="mb-2"><a href="/cards/deck/pdv-f">PDV Fire Starter</a></li>
                        <li class="mb-2"><a href="/cards/deck/pdv-w">PDV Water Starter</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/rules" target="_blank" rel="noopener">Rules</a></li>
                        <li class="mb-2"><a href="https://deviantart.com/monmamo" target="_blank" rel="noopener">DeviantArt</a></li>
                        <li class="mb-2"><a href="https://github.com/monmamo" target="_blank" rel="noopener">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

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
