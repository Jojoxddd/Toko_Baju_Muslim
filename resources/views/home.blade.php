<section class="mb-12">
    <h2 class="text-xl font-bold mb-6 text-center">KATEGORI BAJU MUSLIM</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4">
        <!-- Kategori 1 -->
        <a href="{{ route('produk.kategori', ['kategori' => 'gamis']) }}"
           class="block border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="bg-gray-100 h-40 flex items-center justify-center">
                <img src="{{ asset('images/kategori/gamis.png') }}" alt="Gamis" class="h-full object-cover">
            </div>
            <div class="p-4 text-center bg-white">
                <h3 class="font-semibold text-lg">GAMIS</h3>
                <p class="text-gray-600 mt-1">Tren Terbaru</p>
            </div>
        </a>

        <!-- Kategori 2 -->
        <a href="{{ route('produk.kategori', ['kategori' => 'koko']) }}"
           class="block border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="bg-gray-100 h-40 flex items-center justify-center">
                <img src="{{ asset('images/kategori/koko.png') }}" alt="Koko" class="h-full object-cover">
            </div>
            <div class="p-4 text-center bg-white">
                <h3 class="font-semibold text-lg">BAJU KOKO</h3>
                <p class="text-gray-600 mt-1">Koleksi Lengkap</p>
            </div>
        </a>

        <!-- Kategori 3 -->
        <a href="{{ route('produk.kategori', ['kategori' => 'jilbab']) }}"
           class="block border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="bg-gray-100 h-40 flex items-center justify-center">
                <img src="{{ asset('images/kategori/jilbab.png') }}" alt="Jilbab" class="h-full object-cover">
            </div>
            <div class="p-4 text-center bg-white">
                <h3 class="font-semibold text-lg">JILBAB</h3>
                <p class="text-gray-600 mt-1">Variasi Warna</p>
            </div>
        </a>

        <!-- Kategori 4 -->
        <a href="{{ route('produk.kategori', ['kategori' => 'aksesoris']) }}"
           class="block border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="bg-gray-100 h-40 flex items-center justify-center">
                <img src="{{ asset('images/kategori/aksesoris.png') }}" alt="Aksesoris" class="h-full object-cover">
            </div>
            <div class="p-4 text-center bg-white">
                <h3 class="font-semibold text-lg">AKSESORIS</h3>
                <p class="text-gray-600 mt-1">Pelengkap Outfit</p>
            </div>
        </a>
    </div>
</section>
