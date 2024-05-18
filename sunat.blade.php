<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Aradea | UTS</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">RAS HOME CARE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/perawatan">Perawatan</a></li>
                        <li><a class="dropdown-item" href="/terapi">Terapi</a></li>
                        <li><a class="dropdown-item" href="/sunat">Sunat</a></li>

                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Admin Panel</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <img src="/2.png" class="img-fluid" alt="...">

        <div class="card" style="width: 70rem; margin-left: 60px; margin-left: 30px; ">
        <div class="card-body">
            <h5 class="card-title">{{ $name }}</h5>
            <p class="card-text">{{ $description }}</p>
            <ul>
                <li>{{ $li }}</li>
                <li>{{ $li1 }}</li>
                <li>{{ $li2 }}</li>
                <li>{{ $li3 }}</li>
            </ul>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $why }}</h6>
            <ul>
                <li>{{ $li4 }}</li>
                <li>{{ $li5 }}</li>
                <li>{{ $li6 }}</li>
                <li>{{ $li7 }}</li>
            </ul>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $biaya }}</h6>
            <a href="#" class="card-link">Learn More...</a>
            <a href="#" class="card-link">Booking</a>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>