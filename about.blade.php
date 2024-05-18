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
        <div class="card" style="width: 70rem; margin-left: 60px; margin-top: 30px;">
        <div class="card-body">
            <h5 class="card-title">{{ $name }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Ras Home Care  </h6>
            <p class="card-text">{{ $description }}</p>
        </div>
        </div>
        <div class="card" style="width: 70rem; margin-left: 60px; margin-top: 30px;">
        <div class="card-body">
            <h5 class="card-title">Visi & Misi</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Visi</h6>
            <p class="card-text">{{ $visi }}</p>
            <h6 class="card-subtitle mb-2 text-body-secondary">Misi</h6>
            <ul>
                <li>{{ $misi }}</li>
                <li>{{ $misi1 }}</li>
                <li>{{ $misi2}}</li>
                <li>{{ $misi3 }}</li>
                <li>{{ $misi4 }}</li>
            </ul>
        </div>
        </div>
        <div style="margin-top:30px; margin-left:17%; width:70%; align:center;" class="position-relative py-2 px-4 text-bg-secondary border border-secondary rounded-pill"><b>Profile Staff </b><svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1" fill="var(--bs-secondary)" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
</div>
        <div class="card mb-3 row" style="max-width: 540px; margin-left: 30%; margin-top: 30px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="/image/araa.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $pendiri }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $jabatan }}</h6>
                <ul>
                    <li><p class="card-text">{{ $pengalaman }}</p></li>
                    <li><p class="card-text">{{ $kualifikasi }}</p></li>
                </ul>
                <p class="card-text"><small class="text-body-secondary">Last updated 1 years ago</small></p>
            </div>
            </div>
        </div>
        </div>
        <div class="card mb-3" style="max-width: 540px; margin-left: 30%; margin-top: 30px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="/image/luthfii.jpeg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $pendiri1 }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $jabatan }}</h6>
                <ul>
                    <li><p class="card-text">{{ $pengalaman }}</p></li>
                    <li><p class="card-text">{{ $kualifikasi }}</p></li>
                </ul>
                <p class="card-text"><small class="text-body-secondary">Last updated 1 years ago</small></p>
            </div>
            </div>
        </div> 
        </div>
   
  </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>