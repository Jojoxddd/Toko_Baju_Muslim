@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- Judul & Filter -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Kategori: {{ strtoupper($kategori) }}</h1>
        </div>

        <!-- Search & Sort -->
        <form method="GET" class="row mb-4">
            <div class="col-md-6 mb-2 mb-md-0">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                    placeholder="Cari produk...">
            </div>
            <div class="col-md-4 mb-2 mb-md-0">
                <select name="sort" class="form-select" onchange="this.form.submit()">
                    <option value="">Sort by</option>
                    <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Harga Terendah</option>
                    <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Harga Tertinggi</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </form>

        <!-- Grid Produk -->
        <div class="row">
            @forelse ($produk as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                        @else
                            <div class="card-img-top bg-light text-center py-5 text-muted">No Image</div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text text-success fw-semibold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">Produk tidak ditemukan.</p>
                </div>
            @endforelse
        </div>

        {{-- Pagination (optional) --}}
        {{-- <div class="mt-4">
            {{ $produk->links() }}
        </div> --}}

    </div>
@endsection
