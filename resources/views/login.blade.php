<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="stylelogin.css">
  <link rel="stylesheet" href="login.css">
  <title>Login | Mama Laundry</title>
</head>

<body>
  <header>
    <div class="view video-container">
      <video src="bgvideo.mp4" autoplay muted loop></video>
    </div>
    <div class="container">
      <div class="row pt-5">
        <div class="mx-auto col-xl-4 mb-5 mt-5 pt-5 shadow-lg bg-body rounded">
          <div class="card">
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="text-center">
                  <h2 class="mt-4"><strong>Masuk</strong></h2>
                  <input required name="username" class="form-control mt-5 mb-4" type="text" placeholder="Username" aria-label="default input example">
                  <input required name="password" class="form-control mb-4" type="password" placeholder="Password" aria-label="Password">
                  <button type="submit" class="btn btn-primary mb-4">Masuk</button>
                  <h6 class="mb-4"><strong>atau</strong></h6>
                  <a href="/register">Daftar</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar fixed-bottom navbar-dark bg-dark">
      <div class="container">
        <span class="navbar-brand mb-0 h1">Mama Laundry</span>
      </div>
    </nav>
  </header>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>