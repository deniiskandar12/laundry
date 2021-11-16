<?php

namespace App\Http\Controllers;

use App\Models\Confirmation;
use App\Models\Order;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{

    public function index()
    {
        $confirmations = Confirmation::all();

        return view('admin/data_konfirmasi', ['confirmations' => $confirmations, "title" => "Data Konfirmasi Pembayaran"]);
    }

    public function verifikasi(Request $request)
    {
        $orderId = $request->post('orderId');
        $order = Order::where(['id' => $orderId])->first();
        $order->status = 'Dikerjakan';
        $order->save();

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $id = $request->post('id');
        $konfirmasi = Confirmation::find($id);
        $konfirmasi->delete();

        return redirect()->back();
    }

    public function add(Request $request)
    {
        $confirmation = new Confirmation();
        $confirmation->orderId = $request->post('id');
        $confirmation->keterangan = $request->post('keterangan');
        $imageName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('images'), $imageName);
        $confirmation->foto = $imageName;
        $confirmation->save();

        return redirect()->back();
    }
}
