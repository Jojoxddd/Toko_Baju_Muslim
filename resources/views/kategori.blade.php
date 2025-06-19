@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">

        <!-- Header Kategori + Sort By -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">BAJU KOKO</h1>
            <div class="text-sm text-gray-600">
                Sort By: <span class="font-semibold">Price</span> ⌄
            </div>
        </div>

        <!-- Grid Produk -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @foreach ($produk as $item)
                <div class="bg-white border rounded-lg overflow-hidden shadow hover:shadow-lg transition-shadow">



                    <!-- Info Produk -->
                    <div class="p-3">
                        <h3 class="text-base font-medium">{{ $item->name }}</h3>
                        <p class="text-sm text-green-600 font-semibold mt-1">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
@endsection
