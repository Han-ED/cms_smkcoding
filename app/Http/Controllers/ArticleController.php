<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class ArticleController extends Controller
{
    public function create() {
        $kategori = Category::all();
        return view('addarticle',[
            'kategori' => $kategori
        ]);
    }

    public function store(Request $request) {
        // Validasi input
        $request->validate([
            'judul' => 'required|min:5',
            'deskripsi' => 'required|min:10',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
        } else {
            return back()->with('error', 'Foto tidak ditemukan');
        }

        $post = new Post();
        $post->user_id =1;
        $post->category_id = $request->kategori;
        $post->judul = $request->judul;
        $post->body = $request->deskripsi;
        $post->image = $path;
        $post->save();
        return redirect()->route('home');
    }
}
