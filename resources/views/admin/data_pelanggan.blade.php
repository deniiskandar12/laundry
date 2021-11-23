@extends('layout.admin')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <div class="card bg-dark text-white border-light body-rounded shadow-lg mt-5">
                <img src="{{ asset('img/user.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title">Data Pelanggan</h3>
                    <p class="card-text">Halo Admin!, Selamat Datang di Halaman Data Pelanggan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="container mt-5">
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary col-sm-2 offset-1" data-bs-toggle="modal" data-bs-target="#addUser">
            Tambah Pelanggan
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('add_user') }}" method="POST">
                            @csrf
                            <input required type="text" class="form-control mb-4" name="nama" placeholder="Nama Lengkap..." required>
                            <input required type="number" class="form-control mb-4" name="no_hp" placeholder="Nomor Handphone..." required>
                            <input required type="text" class="form-control mb-4" name="username" placeholder="Username..." required>
                            <input required type="password" class="form-control mb-4" name="password" placeholder="Password..." required>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                        <td>Nama</td>
                        <td>Telp</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td id="id" class="d-none">{{$user->id}}</td>
                        <td id="name">{{$user->nama}}</td>
                        <td id="no-hp">{{$user->no_hp}}</td>
                        <td id="username">{{$user->username}}</td>
                        <td id="password">{{$user->password}}</td>
                        <td>
                            <button class="btn btn-light btn-sm btn-edit" data-bs-toggle="modal" data-bs-target="#editUser" value={{$index}}>
                                <img src="{{ asset('img/edit.png') }}" alt="">
                            </button>
                            <form action="{{ route('delete_user') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="id" value={{$user->id}}>
                                <button type="submit" class="btn btn-light btn-sm">
                                    <img src="{{ asset('img/delete.png') }}" alt="">
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
</div>



<!-- Edit -->
<div class="container mt-5">
    <div class="row">
        <!-- Modal -->
        <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pelanggan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('edit_user') }}" method="POST">
                            @csrf
                            <input id="edit-id" type="hidden" name="id">
                            <input id="edit-nama" type="text" class="form-control mb-4" name="nama" placeholder="Nama Lengkap..." required>
                            <input id="edit-no-hp" type="number" class="form-control mb-4" name="no_hp" placeholder="Nomor Handphone..." required>
                            <input id="edit-username" type="text" class="form-control mb-4" name="username" placeholder="Username..." required>
                            <input id="edit-password" type="password" class="form-control mb-4" name="password" placeholder="Password..." required>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        // on modal show edit
        $(".btn-edit").click(function() {
            var index = $(this).val();
            var row = $(this).closest("tr")
            var id = row.find("#id").text();
            var nama = row.find("#name").text();
            var username = row.find("#username").text();
            var pass = row.find("#password").text();
            var no_hp = row.find("#no-hp").text();

            document.getElementById("edit-id").value = id;
            document.getElementById("edit-nama").value = nama;
            document.getElementById("edit-username").value = username;
            document.getElementById("edit-no-hp").value = no_hp;
            document.getElementById("edit-password").value = pass;
        });

    })
</script>

@endsection