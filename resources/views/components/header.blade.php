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

