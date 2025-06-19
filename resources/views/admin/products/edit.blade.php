@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8 px-4">
    <h2 class="text-xl font-bold mb-4">Edit Produk</h2>

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Nama Produk</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Harga</label>
            <input type="number" name="price" value="{{ $product->price }}" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Gambar Baru (Opsional)</label>
            <input type="file" name="image" class="w-full border rounded p-2">
        </div>

        @if($product->image)
            <div class="mb-2">
                <p class="text-sm">Gambar Saat Ini:</p>
                <img src="{{ asset('storage/' . $product->image) }}" class="w-24 h-24 object-cover">
            </div>
        @endif

        <button class="bg-indigo-600 text-white px-4 py-2 rounded" type="submit">Update</button>
    </form>
</div>
@endsection
