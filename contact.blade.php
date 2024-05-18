<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="module" src="index.js"></script>
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
    <!-- Ubah path sesuai dengan lokasi gambar -->
    <form action="" class="form-control col-4 mb-3" style="width: 60%; margin-left:20%; margin-top:20px; ">
    <h5 class="card-title" style="margin-bottom:20px; text-align:center; "><B> FORM PENDAFTARAN</B></h5>
        <div class="input-group mb-3" >
            <span class="input-group-text">First and last name</span>
            <input type="text" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="exampleInputEmail1" class="input-group-text">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="input-group mb-3">
            <label for="exampleInputtelp" class="input-group-text">No. Telp</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="input-group mb-3">
            <label for="exampleInputAlamat" class="input-group-text">Alamat</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="input-group mb-3">
            <label for="exampleInputtelp" class="input-group-text">Layanan</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Layanan</option>
                <option value="1">Perawatan</option>
                <option value="2">Sunat</option>
                <option value="3">Terapi</option>
            </select>
        </div>
        <div class="input-group form-check mb-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="card-footer" style="margin-left: 10px; background-color: #d3d3d3; position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;
  height:60px;">
        <i class="fa-solid fa-phone" style="margin: 10px; ">{{ $telp }}</i>
        <i class="fa-solid fa-envelope" style="margin: 10px; ">{{ $mail }}</i>
        <i class="fa-solid fa-globe" style="margin: 10px; ">{{ $link }}</i>
    </div>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script>
      /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      let map;
      const chicago = { lat: 41.85, lng: -87.65 };

      /**
       * Creates a control that recenters the map on Chicago.
       */
      function createCenterControl(map) {
        const controlButton = document.createElement("button");
        // Set CSS for the control.
        controlButton.classList.add('buttonStyle');

        controlButton.textContent = "Center Map";
        controlButton.title = "Click to recenter the map";
        controlButton.type = "button";
        // Setup the click event listeners: simply set the map to Chicago.
        controlButton.addEventListener("click", () => {
          map.setCenter(chicago);
        });
        return controlButton;
      }

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: { lat: 49.496675, lng: -102.65625 },
        });

        var georssLayer = new google.maps.KmlLayer({
          url: "http://api.flickr.com/services/feeds/geo/?g=322338@N20&lang=en-us&format=feed-georss",
        });
        georssLayer.setMap(map);

        // Create the DIV to hold the control.
        const centerControlDiv = document.createElement("div");
        // Create the control.
        const centerControl = createCenterControl(map);

        // Append the control to the DIV.
        centerControlDiv.appendChild(centerControl);
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
          centerControlDiv
        );
      }

      window.initMap = initMap;
    </script>
    <style>
      /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      /** 
       * Always set the map height explicitly to define the size of the div element
       * that contains the map. 
       */
      #map {
        height: 100%;
      }

      /** 
       * Optional: Makes the sample page fill the window. 
       */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=INSERT_YOUR_API_KEY&callback=initMap&v=weekly&solution_channel=GMP_CCS_customcontrols_v1"
      defer
    ></script>
 
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- prettier-ignore -->
    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "beta"});</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
