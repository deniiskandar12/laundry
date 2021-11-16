<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{
    public function showReview()
    {
        $reviews = Review::select('*')
            ->join('users', 'reviews.idUser', '=', 'users.id')
            ->get();

        return view('review', ['reviews' => $reviews, 'title' => 'Review']);
    }

    public function addReview(Request $request)
    {
        $review = new Review();
        $review->idUser = session('id');
        $review->nilai = $request->post('nilai');
        $review->tanggapan = $request->post('tanggapan');
        $review->tanggal = date('Y-m-d');
        $review->save();

        return redirect()->back()->with('success', 'Tambah Review Berhasil');
    }
}
