@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-8 px-4">
    <h2 class="text-xl font-bold mb-4">Tambah Produk Baru</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Nama Produk</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Harga</label>
            <input type="number" name="price" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Gambar</label>
            <input type="file" name="image" class="w-full border rounded p-2">
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded" type="submit">Simpan</button>
    </form>
</div>
@endsection
