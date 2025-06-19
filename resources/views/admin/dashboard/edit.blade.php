@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Produk</h2>

    {{-- Tampilkan pesan error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mt-2 mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.dashboard.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $produk->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" name="price" id="price" value="{{ old('price', $produk->price) }}" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" class="form-control" name="stock" id="stock" value="{{ old('stock', $produk->stock) }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" name="category" id="category" required>
                <option value="">-- Pilih Kategori --</option>
                @php
                    $kategoriList = ['Baju Koko', 'Manset', 'Sarung', 'Gamis Anak Anak', 'Gamis Dewasa'];
                @endphp
                @foreach ($kategoriList as $kategori)
                    <option value="{{ $kategori }}" {{ old('category', $produk->category) == $kategori ? 'selected' : '' }}>
                        {{ $kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            @if ($produk->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $produk->image) }}" alt="Gambar" width="100" class="img-thumbnail">
                </div>
            @endif
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update Produk</button>
    </form>
</div>
@endsection
