<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ProductImageController extends Controller
{
    public function index()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh mengakses halaman ini.');
        }

        $produk = Product::all();
        return view('admin.dashboard.index', compact('produk'));
    }

    public function create()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh mengakses halaman ini.');
        }

        return view('admin.dashboard.create');
    }

    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh mengakses halaman ini.');
        }

        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('produk', 'public');
        }

        Product::create($data);
        return redirect()->route('admin.dashboard.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh mengakses halaman ini.');
        }

        $produk = Product::findOrFail($id);
        return view('admin.dashboard.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh mengakses halaman ini.');
        }

        $produk = Product::findOrFail($id);

        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($produk->image) {
                Storage::disk('public')->delete($produk->image);
            }
            $data['image'] = $request->file('image')->store('produk', 'public');
        }

        $produk->update($data);
        return redirect()->route('admin.dashboard.index')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroy($id)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Hanya admin yang boleh mengakses halaman ini.');
        }

        $produk = Product::findOrFail($id);

        if ($produk->image) {
            Storage::disk('public')->delete($produk->image);
        }

        $produk->delete();
        return redirect()->route('admin.dashboard.index')->with('success', 'Produk berhasil dihapus.');
    }
}
