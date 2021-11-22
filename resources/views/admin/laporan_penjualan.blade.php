@extends('layout.admin')
@section('container')
<div class="row mb-5">
    <div class="col-sm-10 offset-1 ">
        <div class="card bg-dark text-white border-light shadow-lg" style="margin-top:50px">
            <img src="{{ asset('img/pesanan.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h3 class="card-title">Laporan Penjualan</h3>
            </div>
        </div>
    </div>
</div>
<!-- Tabel -->
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Bulan</td>
                    <td>Total</td>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $index => $order)
                <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td id="id" class="d-none">{{$order->orderId}}</td>
                    <td>{{$order->tanggal}}</td>
                    <td id="harga">Rp. {{$order->harga}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>

<!-- Edit -->
<div class="container mt-5">
    <div class="row">
        <!-- Modal -->
        <div class="modal fade" id="editOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('edit_order') }}" method="POST">
                            @csrf
                            <input id="edit-id" type="hidden" name="id">
                            <input id="edit-qty" type="number" class="form-control mb-4" name="qty" placeholder="Berat..." required>
                            <input id="edit-harga" type="number" class="form-control mb-4" name="harga" placeholder="Harga..." required>
                            <p>Status</p>
                            <select id="edit-status" class="form-select" aria-label="jenis_cucian_select" name="status">
                                <option value="Dihitung">Dihitung</option>
                                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                                <option value="Dikerjakan">Dikerjakan</option>
                                <option value="Selesai">Selesai</option>
                            </select>
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
            var qty = row.find("#qty").text();
            var harga = row.find("#harga").text();
            var status = row.find("#status").text();

            console.log(id)
            $('#edit-id').val(id);
            $('#edit-harga').val(harga.substring(4, harga.length));
            $('#edit-qty').val(qty.substring(0, qty.length - 3));
            $('#edit-status').val(status);
        });

    })
</script>
@endsection
