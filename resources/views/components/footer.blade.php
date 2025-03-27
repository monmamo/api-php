<footer class="bd-footer py-2 mt-5 bg-dark-subtle ">
        <div class="container py-2 px-4 px-md-3 ">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Homepage">
                        <x-application-mark height="150" />
                    </a>
                    <ul class="list-unstyled small">
                        <li>Ponchatoula, Louisiana, U.S.A.</li>
                        <li class="mt-2"><a href="/people">People/Credits</a> &bull; <a href="/contact">Contact</a> <!--&bull; <a href="/credits">Credits</a --></li>
                    </ul>
                </div>
                <div class="col-sm-1 col-md-1 col-lg-2 mb-3">
                    <h5>Home</h5>
                    <ul class="list-unstyled">
                        @foreach(config('ui.home.links') as $spec)
                        <li class="mb-2"><a href="<?= $spec[0] ?>"><?= $spec[1] ?></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 mb-3">
                    <h5>World of MonMaMo</h5>
                    <ul class="list-unstyled">
                    @foreach(config('ui.world.links') as $spec)
                        <li class="mb-2"><a href="<?= $spec[0] ?>"><?= $spec[1] ?></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 mb-3">
                    <h5>Products</h5>
                    <ul class="list-unstyled">
                    @foreach(config('ui.products.links') as $spec)
                        <li class="mb-2"><a href="<?= $spec[0] ?>"><?= $spec[1] ?></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 mb-3">
                    <h5>Social</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                        <a class="navbar-brand" href="https://www.facebook.com/people/Monsters-Masters-Mobsters/61559695048144/" aria-label="Facebook" target="_blank"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_136_3709)">
                    {{ view('icons.facebook')}}
                    </g>
                    <defs>
                    <clipPath id="clip0_136_3709">
                    <rect width="18" height="18" fill="white" transform="translate(2 2)"/>
                    </clipPath>
                    </defs>
                    </svg>

                </a>
                <a class="navbar-brand" href="https://x.com/monmamoverse" aria-label="X" target="_blank"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_136_3753)">
                    {{ view('icons.xcom')}}
                    </g>
                    <defs>
                    <clipPath id="clip0_136_3753">
                    <rect width="18" height="18" fill="white" transform="translate(2 2)"/>
                    </clipPath>
                    </defs>
                    </svg>

                </a>
                <a class="navbar-brand" href="https://www.instagram.com/monmamoverse" aria-label="Instagram" target="_blank"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_136_3697)" fill="black">
                    {{ view('icons.instagram')}}
                    </g>
                    <defs>
                    <clipPath id="clip0_136_3697" >
                    <rect width="18" height="18" fill="white" transform="translate(2 2)"/>
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
                    <rect width="18" height="18" fill="white" transform="translate(2 2)"/>
                    </clipPath>
                    </defs>
                    </svg>

                </a>
                        </li>
                    </ul>
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                    @foreach(config('ui.community.links') as $spec)
                        <li class="mb-2"><a href="<?= $spec[0] ?>"><?= $spec[1] ?></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-1 col-md-1 col-lg-1 mb-3">
                    <h5>Tools</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" data-bs-toggle="modal" data-bs-target="#dice-modal">Roll Dice</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <x-tools></x-tools>


