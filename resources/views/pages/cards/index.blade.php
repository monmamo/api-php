<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monsters Masters & Mobsters Card Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/htmx.org@2.0.2"></script>
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

    <main class="container-fluid">
        <div class="row">
            <div class="col col-lg-3 flex-shrink-0 p-3" style="height: 1050px; overflow: auto" id="left-section" >
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"  hx-boost="true" hx-target="#right-section" hx-swap="innerHTML">
        <?php
                foreach (\App\Enums\CardSet::Base->cards() as $card_number => $card_info) {
                    ?>
            <li><a href="/cards/card/<?php echo $card_number; ?>"
 class="card-link link-body-emphasis d-inline-flex text-decoration-none rounded" data-id="<?php echo $card_number; ?>"><?php echo $card_number; ?> <?php echo $card_info->name() ?? ''; ?></a></li>
        <?php } ?>
    </ul>
            </div>
            <div class="col col-lg-9" style="height: 1050px" id="right-section" hx-get="#"  hx-trigger="dblclick"
            hx-target="#right-section">
                <p>Card displays here.</p>
            </div>
        </div>
    </main>

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
