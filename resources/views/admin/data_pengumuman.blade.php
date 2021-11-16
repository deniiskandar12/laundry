@extends('layout.admin')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <div class="card bg-dark text-white border-light body-rounded shadow-lg mt-5">
                <img src="{{ asset('img/user.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title">Data Pengumuman</h3>
                    <p class="card-text">Halo Admin!, Selamat Datang di Halaman Data Pengumuman</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="container mt-5">
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary col-sm-2 offset-1" data-bs-toggle="modal" data-bs-target="#addPengumuman">
            Tambah Pengumuman
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addPengumuman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('add_pengumuman') }}" method="POST">
                            @csrf
                            <input type="text" class="form-control mb-4" name="judul" placeholder="Judul..." required>
                            <textarea class="form-control mb-4" name="isi" placeholder="Isi..." required></textarea>
                            <input type="date" class="form-control mb-4" name="tanggal" required>

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
                        <td>Judul</td>
                        <td>Isi</td>
                        <td>Tanggal</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengumuman as $index => $p)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td id="id" class="d-none">{{$p->id}}</td>
                        <td id="judul">{{$p->judul}}</td>
                        <td id="isi">{{$p->isi}}</td>
                        <td id="tanggal">{{$p->tanggal}}</td>
                        <td class="col-sm-2">
                            <button class="btn btn-light btn-sm btn-edit" data-bs-toggle="modal" data-bs-target="#editPengumuman" value={{$index}}>
                                <img src="{{ asset('img/edit.png') }}" alt="">
                            </button>
                            <form action="{{ route('delete_pengumuman') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="id" value={{$p->id}}>
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
        <div class="modal fade" id="editPengumuman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pengumuman</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('edit_pengumuman') }}" method="POST">
                            @csrf
                            <input id="edit-id" type="hidden" name="id">
                            <input id="edit-judul" type="text" class="form-control mb-4" name="judul" placeholder="Judul..." required>
                            <textarea id="edit-isi" class="form-control mb-4" name="isi" placeholder="Isi..." required></textarea>
                            <input id="edit-tanggal" type="date" class="form-control mb-4" name="tanggal" required>

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
            var judul = row.find("#judul").text();
            var isi = row.find("#isi").text();
            var tanggal = row.find("#tanggal").text();

            document.getElementById("edit-id").value = id;
            document.getElementById("edit-judul").value = judul;
            document.getElementById("edit-isi").value = isi;
            document.getElementById("edit-tanggal").value = tanggal.substring(0, 10);;
        });

    })
</script>

@endsection