<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
    <title>Mama Laundry | {{ $title }} </title>

    <style>
        .card-cover {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        }
    </style>
</head>

    <body style="background: #E5E5E5">
<!-- navbar -->
    <div class="row">
        <nav class="navbar navbar-light bg-light">
            <!-- brand -->
            <a class="navbar-brand fw-bold" href="/" style="margin-left: 10%" >Mama Laundry</a>
            <!-- toggler -->
            <button class="navbar-toggler" style="margin-right: 10%" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- offcanvas menu -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link " href="/user/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/review-kami">Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/riwayat-pesananmu">Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/riwayat-pesananmu">Review Kami</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </div>
    <!-- content -->
        <div class="row">
            <div class="container p-5">
                @yield('content')
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
