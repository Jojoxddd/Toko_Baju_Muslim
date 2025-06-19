@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4">
    <h1 class="text-2xl font-bold mb-6">Manajemen Produk</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Produk</a>

    <table class="w-full table-auto border-collapse border">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Harga</th>
                <th class="border px-4 py-2">Gambar</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="border px-4 py-2">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="w-16 h-16 object-cover">
                        @endif
                    </td>
                    <td class="border px-4 py-2 space-x-2">
                        <a href="{{ route('products.edit', $product) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus produk ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection
