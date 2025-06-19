<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan produk berdasarkan kategori
    public function kategori(Request $request, $kategori)
{
    $query = Product::where('category', $kategori);

    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    if ($request->sort === 'asc') {
        $query->orderBy('price', 'asc');
    } elseif ($request->sort === 'desc') {
        $query->orderBy('price', 'desc');
    }

    $produk = $query->get(); // atau ->paginate(9);

    return view('kategori', compact('produk', 'kategori'));
}

}
