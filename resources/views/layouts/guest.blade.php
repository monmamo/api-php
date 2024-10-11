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

<style>
    body {
        display: flex;
        margin: 0;
        height: 1050px;
        padding-top: 4.5rem;
    }

    #left-section {
        background-color: #f4f4f4;
        padding: 10px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    #right-section {
        padding: 20px;
        display: inline;
    }

    a {
        display: block;
        margin-bottom: 10px;
        color: #333;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>

<?php
?>


<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Monsters Masters &amp; Mobsters</a>
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
                        <a class="nav-link" href="/events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rules">Community Rules</a>
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

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Subtypes</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Item</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Decks</a>
                        <ul class="dropdown-menu" hx-boost="true" hx-target="#left-section" hx-swap="innerHTML">
                            <li><a class="dropdown-item" href="/cards/deck/sdv-library">SDV Library</a></li>
                            <li><a class="dropdown-item" href="/cards/deck/sdv-monsters">SDV Monsters</a></li>
                            <li><a class="dropdown-item" href="/cards/deck/pdv-e">PDV Electricty Starter</a></li>
                            <li><a class="dropdown-item" href="/cards/deck/pdv-f">PDV Fire Starter</a></li>
                            <li><a class="dropdown-item" href="/cards/deck/pdv-w">PDV Water Starter</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container">
        {{$slot}}
    </main>

    <footer class="container">
        <div class="row">
            <div class="col">
                <a class="p-3 " href="https://www.facebook.com/people/Monsters-Masters-Mobsters/61559695048144/" aria-label="Facebook" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/facebook-square.svg" alt="social media icon" class="social-media-icon">
                    <p>Facebook</p>
                </a>
            </div>
            <div class="col">
                <a class="p-3 " href="https://x.com/monmamoverse" aria-label="X" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/x-square.svg" alt="social media icon" class="social-media-icon">
                    <p>X</p>
                </a>
            </div>
            <div class="col">
                <a class="p-3 " href="https://www.instagram.com/monmamoverse" aria-label="Instagram" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/instagram-square.svg" alt="social media icon" class="social-media-icon">
                    <p>Instagram</p>
                </a>
            </div>
            <div class="col">
                <a class="p-3 " href="https://pinterest.com/monmamoverse" aria-label="Pinterest" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/pinterest-square.svg" alt="social media icon" class="social-media-icon">
                    <p>Pinterest</p>
                </a>
            </div>
            <div class="col">
                <a class="p-3 " href="https://www.deviantart.com/monmamo" aria-label="Website" target="_self"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/website-square.svg" alt="social media icon" class="social-media-icon">
                    <p>DeviantArt</p>
                </a>
            </div>
            <div class="col">
                <a class="p-3 " href="https://github.com/monmamo" aria-label="Website" target="_blank"><img src="https://stcdn.leadconnectorhq.com/funnel/icons/square/website-square.svg" alt="social media icon" class="social-media-icon">
                    <p>GitHub</p>
                </a>
            </div>
        </div>
        <div class="row">
            <p>Copyright 2024 Monsters Masters &amp; Mobsters LLC</p>
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
