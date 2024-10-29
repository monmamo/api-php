<header class="navbar navbar-expand-lg bd-navbar sticky-top bg-dark-subtle">
    <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap">
        <a class="navbar-brand" href="/"><x-application-logo size="32" />Monsters Masters &amp; Mobsters</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <x-nav.menu title="Home" :links="config('ui.home.links')" />
                <x-nav.menu title="World" :links="config('ui.world.links')" />
                <x-nav.menu title="Products" :links="config('ui.products.links')" />
                <x-nav.menu title="Community" :links="config('ui.community.links')" />
            </ul>
            <a class="navbar-brand" href="https://www.facebook.com/people/Monsters-Masters-Mobsters/61559695048144/" aria-label="Facebook" target="_blank"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_136_3709)">
                        {{ view('icons.facebook')}}
                    </g>
                    <defs>
                        <clipPath id="clip0_136_3709">
                            <rect width="18" height="18" fill="white" transform="translate(2 2)" />
                        </clipPath>
                    </defs>
                </svg>

            </a>
            <a class="navbar-brand" href="https://x.com/monmamoverse" aria-label="X" target="_blank"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_136_3753)" fill="black">
                        {{ view('icons.xcom')}}
                    </g>
                    <defs>
                        <clipPath id="clip0_136_3753">
                            <rect width="18" height="18" fill="white" transform="translate(2 2)" />
                        </clipPath>
                    </defs>
                </svg>

            </a>
            <a class="navbar-brand" href="https://www.instagram.com/monmamoverse" aria-label="Instagram" target="_blank"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_136_3697)" fill="black">
                        {{ view('icons.instagram')}}
                    </g>
                    <defs>
                        <clipPath id="clip0_136_3697">
                            <rect width="18" height="18" fill="white" transform="translate(2 2)" />
                        </clipPath>
                    </defs>
                </svg>

            </a>
            <a class="navbar-brand" href="/gallery" aria-label="Pinterest" target="_blank"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_136_3733)" fill="black">
                        {{ view('icons.pinterest')}}
                    </g>
                    <defs>
                        <clipPath id="clip0_136_3733">
                            <rect width="18" height="18" fill="white" transform="translate(2 2)" />
                        </clipPath>
                    </defs>
                </svg>

            </a>
        </div>
        <form action="/search" class="d-flex" role="search">
            <input name="term" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        </div>
    </nav>
</header>
