<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;
use App\Models\Kegiatan1;
use App\Models\Kegiatan2;
use App\Models\Slide;
use App\Models\Artikel;


class HomeController extends Controller
{
    public function index()
    {
        $buku = Buku::get();
        $kegiatan2 = Kegiatan2::get();
        return view('home.index',compact('buku','kegiatan2'));
    }

    public function book()
    {
        $buku = Buku::get();
        $slide = Slide::get();
        return view('home.buku', compact('buku','slide'));
    }

    public function activity()
    {
        return view('home.kegiatan');
    }

    public function booking()
    {
        $artikel = Artikel::paginate(3); // Menampilkan 5 artikel per halaman
        return view('home.reservasi', compact('artikel'));
    }
    

    public function view()
    {
        $kegiatan1 = Kegiatan1::get();
        return view('view.view', compact('kegiatan1'));
    }

    public function view2()
    {
        $kegiatan2 = Kegiatan2::get();
        return view('view.view2', compact('kegiatan2'));
    }
}
