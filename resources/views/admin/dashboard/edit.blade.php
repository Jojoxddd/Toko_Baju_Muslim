@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Gambar Produk</h2>
    <a href="{{ route('admin.dashboard.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.dashboard.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Gambar</label>
            <input type="text" name="title" class="form-control" value="{{ $image->title }}" required>
        </div>

        <div class="mb-3">
            <label>Gambar Saat Ini:</label><br>
            <img src="{{ asset('storage/' . $image->image) }}" alt="gambar" style="width: 200px;">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Ganti Gambar (opsional)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
