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
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <title>Mama Laundry | {{ $title }} </title>

    <style>
        .card-cover {
            background-position: center center;
            background-size: cover;
        }

        .checked {
            color: orange;
        }

        .modal-content {
            background: #E5E5E5;
        }
    </style>
</head>

<body style="background: #E5E5E5">
    <!-- navbar -->
    <div class="row">
        <nav class="navbar navbar-light bg-light">
            <!-- brand -->
            <a class="navbar-brand fw-bold" href="/" style="margin-left: 10%">Mama Laundry</a>
            <!-- username nama -->
            <a href="{{ route('logout') }}" class="btn btn-danger justify-content-end" style="margin-right: 10%">Log out</a>
        </nav>
    </div>
    <!-- content -->
    <div class="row">
        <div class="container p-5">
            @yield('content')
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#rateMe1').mdbRate();
        });

        function alertSuccessReview() {
            alert("Review Berhasil Ditambahkan");
        }

        function alertSuccessPesan() {
            alert("Pesanan Berhasil Ditambahkan");
        }

        function alertSuccessBayar() {
            alert("Pengiriman Bukti Pembayaran Sukses");
        }

        function alertSuccessUpload() {
            alert("Bukti Berhasil Diunggah");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </script>
</body>

</html>