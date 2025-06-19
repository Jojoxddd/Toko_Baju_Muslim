<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function index()
    {
        $images = ProductImage::latest()->paginate(10);
        return view('admin.dashboard.index', compact('images'));
    }

    public function create()
    {
        return view('admin.dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('images', 'public');

        ProductImage::create([
            'title' => $request->title,
            'image' => $path,
        ]);

        return redirect()->route('admin.dashboard.index')->with('success', 'Gambar ditambahkan');
    }

    public function edit(ProductImage $dashboard)
    {
        return view('admin.dashboard.edit', ['image' => $dashboard]);
    }

    public function update(Request $request, ProductImage $dashboard)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($dashboard->image);
            $path = $request->file('image')->store('images', 'public');
            $dashboard->image = $path;
        }

        $dashboard->title = $request->title;
        $dashboard->save();

        return redirect()->route('admin.dashboard.index')->with('success', 'Gambar diperbarui');
    }

    public function destroy(ProductImage $dashboard)
    {
        Storage::disk('public')->delete($dashboard->image);
        $dashboard->delete();

        return back()->with('success', 'Gambar dihapus');
    }
}
