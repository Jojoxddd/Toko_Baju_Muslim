@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">KATEGORI BAJU MUSLIM</h2>

    <div class="row">
        <!-- Baris Pertama (3 produk Baju Koko) -->
        @foreach(range(1, 3) as $item)
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <a href="{{ route('produk.kategori', 'baju-koko') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm hover-shadow-lg transition">
                        <img src="{{ asset('image/gambar1.jpeg') }}"
                             alt="Baju Koko"
                             class="card-img-top img-fluid"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body text-center">
                            <p class="card-title fw-semibold text-dark">Baju KOKO</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        <!-- Baris Kedua (3 produk Baju Koko tambahan) -->
        @foreach(range(1, 3) as $item)
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <a href="{{ route('produk.kategori', 'baju-koko') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm hover-shadow-lg transition">
                        <img src="{{ asset('image/gambar1.jpeg') }}"
                             alt="Baju Koko"
                             class="card-img-top img-fluid"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body text-center">
                            <p class="card-title fw-semibold text-dark">Baju KOKO</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
