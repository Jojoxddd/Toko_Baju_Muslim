@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Tambah Produk Baru</h2>

    {{-- Tampilkan Error Validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan!</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.dashboard.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" name="price" id="price" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" class="form-control" name="stock" id="stock" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" name="category" id="category" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Baju Koko">Baju Koko</option>
                <option value="Manset">Manset</option>
                <option value="Sarung">Sarung</option>
                <option value="Gamis Anak Anak">Gamis Anak Anak</option>
                <option value="Gamis Dewasa">Gamis Dewasa</option>
                <option value="Mukena">Mukena</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
