<?php

namespace App\Http\Controllers;
use App\Models\berita;
use illuminate\request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class FrontController extends Controller
{
    // menampilkan semua data berita
    public function detail($id)
    {
        $berita = berita::findOrFail($id);
        return view('detail', compact('berita'));
    }
}
