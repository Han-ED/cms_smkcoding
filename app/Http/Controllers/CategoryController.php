<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create() {
        return view('addcategory');
    }

    public function store (Request $request){
        $request->validate([
            'kategori' => 'required|min:5'
        ]);

        $kategori = new Category();
        $kategori->judul_kategori = $request->kategori;
        $kategori->save();
        return redirect()->route('article.create');
    }
}
