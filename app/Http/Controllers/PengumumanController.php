<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function showPengumuman()
    {
        $pengumuman = Pengumuman::all();

        return view('pengumuman', ['pengumuman' => $pengumuman]);
    }

    public function addPengumuman(Request $request)
    {
        $pengumuman = new Pengumuman();
        $pengumuman->pengumuman = $request->post('pengumuman');
        $pengumuman->tanggal = date('Y-m-d');
        $pengumuman->save();

        return redirect()->back()->with('success', 'Tambah Pengumuman Berhasil');
    }

    public function editPengumuman(Request $request)
    {
        $id = $request->post('id');
        $pengumuman = Pengumuman::find($id);
        $pengumuman->pengumuman = $request->post('pengumuman');
        $pengumuman->save();

        return redirect()->back()->with('success', 'Edit Pengumuman Berhasil');
    }

    public function deletePengumuman(Request $request)
    {
        $id = $request->post('id');
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();

        return redirect()->back()->with('success', 'Hapus Pengumuman Berhasil');
    }
}
