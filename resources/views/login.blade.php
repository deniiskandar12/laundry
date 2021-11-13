<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="stylelogin.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

  <title>Mama Laundry | {{ $title }} </title>
</head>

<body style="background: #E5E5E5;">
  <div class="container">
    <div class="container">
      <div class="row" style="margin-top: 150px;">
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="col-4 offset-4 text-area">
            <input type="text" class="form-control my-3" placeholder="Username" name="username">
            <input type="password" class="form-control my-3" placeholder="Password" name="password">
          </div>
          <div class="col-2 offset-5 text-center">
            <button type="submit" class="btn btn-primary" style="background-color: #7749F8; ">Masuk</button>
            <p class="mt-3">Atau</p>
            <a href="/register">Daftar</a>
          </div>
        </form>
      </div>
    </div>
    <nav class="navbar fixed-top navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="/" style="margin-left: 10%">Mama Laundry</a>
      </div>
    </nav>
  </div>

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