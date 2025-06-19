<section>
    <h2 class="text-xl font-bold mb-4">Produk Unggulan</h2>
    <div class="flex gap-4">
        @foreach($unggulan as $item)
        <a href="{{ route('produk.kategori', ['kategori' => $item->category]) }}">
            <div class="border p-2 rounded shadow-md hover:shadow-lg">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-40 h-40 object-cover">
                <div class="mt-2">
                    <h3 class="font-semibold">{{ strtoupper($item->name) }}</h3>
                    <p class="text-green-600">Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>
