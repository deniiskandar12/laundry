@extends('layout/main')
@section('content')

<!-- pengumuman -->
<div class="card text-white bg-light" style="background: #E5E5E5">
    <h5 class="card-header bg-info">Pengumuman</h5>

    @foreach($pengumuman as $p)
    <div class="card-body text-dark my-2 mx-5 rounded" style="background: #E5E5E5">
        <h5 class="card-title">{{$p->judul}}</h5>
        <p class="card-text">{{$p->isi}}</p>
        <p class="card-text text-success">{{$p->tanggal}}</p>
    </div>
    @endforeach

</div>

@endsection