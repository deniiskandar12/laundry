@extends('layout.admin')
@section('container')
<div class="row mb-5">
    <div class="col-sm-10 offset-1 ">
        <div class="card bg-dark text-white border-light shadow-lg" style="margin-top:50px">
            <img src="{{ asset('img/pesanan.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h3 class="card-title">Data Konfirmasi Pembayaran</h3>
            </div>
        </div>
    </div>
</div>
<!-- Tabel -->
<div class="row">
    <div class="col-sm-10 offset-1">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Order ID</td>
                    <td>Foto</td>
                    <td>Keterangan</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($confirmations as $index => $confirmation)
                <tr>
                    <td>{{$index+1}}</th>
                    <td>{{$confirmation->orderId}}</td>
                    <td><img src="{{asset('images/').'/'.$confirmation->foto}}" alt="" width="60px" height="40px"></td>
                    <td>{{$confirmation->keterangan}}</td>
                    <td class="col-3">
                        <form action="{{ route('verifikasi_pembayaran')}}" method="post" class="d-inline">
                            @csrf
                            <input type="hidden" name="orderId" value="{{$confirmation->orderId}}">
                            <button type="submit" class="btn btn-success btn-sm">Verifikasi</button>
                        </form>
                        <form action="{{ route('delete_pembayaran') }}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value={{$confirmation->orderId}}>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
@endsection