@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" style="background-color: #fff8ed;">
    <div class="container">
        <h2 class="text-center fw-bold mb-5 text-primary">Kategori Baju Muslim</h2>

        <div class="row g-4">
            <!-- Produk 1 -->
            <div class="col-12 col-sm-6 col-md-4">
                <a href="{{ route('produk.kategori', 'Baju Koko') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition rounded-4 overflow-hidden bg-white">
                        <img src="{{ asset('image/gambar1.jpeg') }}"
                             class="card-img-top"
                             style="height: 250px; object-fit: cover;" alt="Baju Koko">
                        <div class="card-body text-center">
                            <p class="fw-bold text-dark mb-0">Baju KOKO</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 2 -->
            <div class="col-12 col-sm-6 col-md-4">
                <a href="{{ route('produk.kategori', 'Manset') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition rounded-4 overflow-hidden bg-white">
                        <img src="{{ asset('image/gambar2.jpg') }}"
                             class="card-img-top"
                             style="height: 250px; object-fit: cover;" alt="Manset">
                        <div class="card-body text-center">
                            <p class="fw-bold text-dark mb-0">Manset Baju</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 3 -->
            <div class="col-12 col-sm-6 col-md-4">
                <a href="{{ route('produk.kategori', 'Gamis Anak Anak') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition rounded-4 overflow-hidden bg-white">
                        <img src="{{ asset('image/gambar3.jpg') }}"
                             class="card-img-top"
                             style="height: 250px; object-fit: cover;" alt="Gamis Anak Anak">
                        <div class="card-body text-center">
                            <p class="fw-bold text-dark mb-0">Gamis Anak</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 4 -->
            <div class="col-12 col-sm-6 col-md-4">
                <a href="{{ route('produk.kategori', 'Mukena') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition rounded-4 overflow-hidden bg-white">
                        <img src="{{ asset('image/gambar4.jpg') }}"
                             class="card-img-top"
                             style="height: 250px; object-fit: cover;" alt="Mukena">
                        <div class="card-body text-center">
                            <p class="fw-bold text-dark mb-0">Mukena</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 5 -->
            <div class="col-12 col-sm-6 col-md-4">
                <a href="{{ route('produk.kategori', 'Sarung') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition rounded-4 overflow-hidden bg-white">
                        <img src="{{ asset('image/gambar5.jpg') }}"
                             class="card-img-top"
                             style="height: 250px; object-fit: cover;" alt="Sarung">
                        <div class="card-body text-center">
                            <p class="fw-bold text-dark mb-0">Sarung</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 6 -->
            <div class="col-12 col-sm-6 col-md-4">
                <a href="{{ route('produk.kategori', 'Gamis Dewasa') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition rounded-4 overflow-hidden bg-white">
                        <img src="{{ asset('image/gambar6.jpg') }}"
                             class="card-img-top"
                             style="height: 250px; object-fit: cover;" alt="Gamis Dewasa">
                        <div class="card-body text-center">
                            <p class="fw-bold text-dark mb-0">Gamis Dewasa</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-shadow:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        transform: translateY(-3px);
        transition: all 0.3s ease-in-out;
    }

    .transition {
        transition: all 0.3s ease-in-out;
    }
</style>
@endsection
