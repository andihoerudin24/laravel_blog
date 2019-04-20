<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Categori;
use App\Artikel;

class FrontController extends Controller
{
    public function index()
    {
        $categori = Categori::all();
        $artikel = Artikel::latest()->get()->random(2);
        $artikelall = Artikel::latest()->get();
        $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('front', compact('categori', 'artikel', 'artikelall', 'artikelterkait'));
    }

    public function show(Artikel $artikel)
    {
        $artikel_detail = $artikel;
        $artikelterkait = Artikel::latest()->get()->random(3);
        $categori = Categori::withCount('Artikel')->get();

        return view('front.artikel_detail', compact('artikel_detail', 'categori', 'artikelterkait'));
    }

    public function artikel_kategori(Categori $kategori)
    {
        $categori = Categori::all();
        $artikel = Artikel::latest()->get()->random(2);
        $artikelall = $kategori->Artikel()->get();
        $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('front', compact('categori', 'artikel', 'artikelall', 'artikelterkait'));
    }

    public function about()
    {
        $categori = Categori::all();

        return view('front.about', compact('categori'));
    }


    public function contact()
    {
        $categori = Categori::all();

        return view('front.contact', compact('categori'));
    }
}
