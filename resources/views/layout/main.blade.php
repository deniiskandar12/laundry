<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    
    <title>Mama Laundry | {{ $title }} </title>
    <style>
        .checked {
            color: orange;
        }
    </style>
    
</head>

    <body style="background: #E5E5E5">
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-dark bg-info">
            <a class="navbar-brand fw-bold" href="/" style=" margin-left: 10%" >Mama Laundry</a>
                <ul class="nav" style="margin-right: 10%">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ ($title === "Home") ? 'fw-bold' : "" }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ ($title === "Review") ? 'fw-bold' : "" }}" href="/review">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ ($title === "Pengumuman") ? 'fw-bold' : "" }}" href="/pengumuman">Pengumuman</a>
                    </li>
                </ul>
        </nav>
    </div>
        <div class="row">
            <div class="container p-5">
                @yield('content')
            </div>
        </div>


</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
