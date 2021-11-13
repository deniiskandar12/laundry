@extends('layout.admin')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <div class="card bg-dark text-white border-light body-rounded shadow-lg mt-5">
                <img src="{{ asset('img/user.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title">Data User</h3>
                    <p class="card-text">Halo Admin Markonah!, Selamat Datang di Halaman Dashboard</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Search -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-2 offset-1">
            <a href="/adduser" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Tambah Data</a>
        </div>
        <div class="col-sm-4 offset-4">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</div>

<!-- Tabel -->
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>User</td>
                        <td>Telp</td>
                        <td>Alamat</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$user->nama}}</td>
                        <td>08989829389</td>
                        <td>Jalan Kenangan 3 no 23</td>
                        <td>
                            <button class="btn btn-light btn-sm">
                                <img src="{{ asset('img/info.png') }}" alt="">
                            </button>
                            <button class="btn btn-light btn-sm">
                                <img src="{{ asset('img/edit.png') }}" alt="">
                            </button>
                            <button class="btn btn-light btn-sm">
                                <img src="{{ asset('img/delete.png') }}" alt="">
                            </button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>

                </tfoot>
            </table>
            <!-- Paginatio -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection