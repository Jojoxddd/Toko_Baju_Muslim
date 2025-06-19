@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Dashboard Admin - Produk</h1>

    <a href="{{ route('admin.dashboard.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
        + Tambah Produk
    </a>

    @foreach ($produk as $item)
        <div class="border p-4 mb-4 flex items-center gap-4">
            @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" class="w-24 h-24 object-cover rounded">
            @endif
            <div>
                <div class="font-bold">{{ $item->name }}</div>
                <div>Rp {{ number_format($item->price, 0, ',', '.') }}</div>
                <div>Stok: {{ $item->stock }}</div>
                <div>Kategori: {{ $item->category }}</div>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.dashboard.edit', $item->id) }}" class="text-blue-600 mr-2">Edit</a>
                <form action="{{ route('admin.dashboard.destroy', $item->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="text-red-600">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
