<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Buku;
use App\Models\Kegiatan1;
use App\Models\Kegiatan2;
use App\Models\Artikel;
use App\Models\SLide;

class AdminController extends Controller
{
    public function index()
    {
        return view('profil.dahboard');
    }

    public function getData()
    {
        $bukuCount = Buku::count();
        $kegiatan1Count = Kegiatan1::count();
        $kegiatan2Count = Kegiatan2::count();
        $artikelCount = Artikel::count();
        $slideCount = Slide::count();
        
        return response()->json([
            'buku' => $bukuCount,
            'kegiatan1' => $kegiatan1Count,
            'kegiatan2' => $kegiatan2Count,
            'artikel' => $artikelCount,
            'slide' => $slideCount,
        ]);
    }
}
