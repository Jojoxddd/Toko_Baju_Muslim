@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Produk: {{ ucfirst($kategori) }}</h2>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($produk as $item)
                <div class="border p-2 rounded shadow hover:shadow-lg">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-40 object-cover">
                    <h3 class="mt-2 font-semibold">{{ $item->name }}</h3>
                    <p class="text-green-600">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
