@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Admin - Gambar Produk</h2>


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($images as $image)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $image->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $image->title }}</h5>
                    <a href="{{ route('admin.dashboard.edit', $image->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.dashboard.destroy', $image->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $images->links() }}
</div>
@endsection
