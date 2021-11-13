<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{
    public function showReview()
    {
        $reviews = Review::all();

        return view('review', ['reviews' => $reviews]);
    }

    public function addReview(Request $request)
    {
        $review = new Review();
        $review->nilai = $request->post('nilai');
        $review->tanggapan = $request->post('tanggapan');
        $review->tanggal = date('Y-m-d');
        $review->save();

        return redirect()->back()->with('success', 'Tambah Review Berhasil');
    }
}
