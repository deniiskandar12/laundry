<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::select('*', 'orders.id as orderId')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->get();

        return view('admin/data_pesanan', ['orders' => $orders, "title" => "Data Pesanan"]);
    }
    
    public function index_laporan()
    {
        $report = Order::select('orders.id as orderId', 'month', 'total' )
        ->orderBY('month','desc')
        ->get();

        return view('admin/laporan_penjualan', ['orders' => $report, "title" => "Laporan Penjualan"]);
    }

    public function add(Request $request)
    {
        $order = new Order();
        $order->user_id = session('id');
        $order->alamat = $request->post('alamat');
        $order->jenis = $request->post('jenis');
        $order->qty = 0;
        $order->harga = 0;
        $order->status = 'Dihitung';
        $order->tanggal = date('Y-m-d');
        $order->save();

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $id = $request->post('id');
        $order = Order::find($id);
        $order->qty = $request->post('qty');
        $order->harga = $request->post('harga');
        $order->status = $request->post('status');
        $order->save();

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $id = $request->post('id');
        $order = Order::find($id);
        $order->delete();

        return redirect()->back();
    }
}
