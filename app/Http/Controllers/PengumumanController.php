<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function showPengumuman()
    {
        $pengumuman = Announcement::all();

        return view('pengumuman', ['pengumuman' => $pengumuman, 'title' => 'Pengumuman']);
    }

    public function showDataPengumuman()
    {
        $pengumuman = Announcement::all();

        return view('admin/data_pengumuman', ['pengumuman' => $pengumuman, 'title' => 'Pengumuman']);
    }

    public function addPengumuman(Request $request)
    {
        $pengumuman = new Announcement();
        $pengumuman->judul = $request->post('judul');
        $pengumuman->isi = $request->post('isi');
        $pengumuman->tanggal = $request->post('tanggal');
        $pengumuman->save();

        return redirect()->back()->with('success', 'Tambah Pengumuman Berhasil');
    }

    public function editPengumuman(Request $request)
    {
        $id = $request->post('id');
        $pengumuman = Announcement::find($id);
        $pengumuman->judul = $request->post('judul');
        $pengumuman->isi = $request->post('isi');
        $pengumuman->tanggal = $request->post('tanggal');
        $pengumuman->save();

        return redirect()->back()->with('success', 'Edit Pengumuman Berhasil');
    }

    public function deletePengumuman(Request $request)
    {
        $id = $request->post('id');
        $pengumuman = Announcement::find($id);
        $pengumuman->delete();

        return redirect()->back()->with('success', 'Hapus Pengumuman Berhasil');
    }
}
