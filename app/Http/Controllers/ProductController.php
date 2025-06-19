<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan produk berdasarkan kategori
    public function kategori($kategori)
    {
        $produk = Product::where('category', $kategori)->get();
        return view('produk.kategori', compact('produk', 'kategori'));
    }
}
