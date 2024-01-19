@php
    //Header's links
    $links = [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS'
    ]
@endphp

<header>
    {{-- start nav --}}
    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container justify-content-between">
            <img class="m-2 pe-2" src="/assets/img/dc-logo.png" alt="...">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-4">
                    @foreach($links as $link)
                    <li class="fw-bold">
                        <a class="nav-link active" aria-current="page" href="#">{{ $link }}</a>
                    </li>
                    @endforeach
                    <li class="nav-item dropdown fw-bold">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Esempio #1</a></li>
                            <li><a class="dropdown-item" href="#">Esempio #2</a></li>
                            <li><a class="dropdown-item" href="#">Esempio #3</a></li>
                            <li><a class="dropdown-item" href="#">Esempio #4</a></li>
                            <li><a class="dropdown-item" href="#">Esempio #5</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>