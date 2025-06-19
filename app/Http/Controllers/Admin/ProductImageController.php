namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function index()
    {
        $produk = Product::all();
        return view('admin.dashboard.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.dashboard.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('', 'public');
        }

        Product::create($data);
        return redirect()->route('admin.dashboard.index')->with('success', 'Produk ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Product::findOrFail($id);
        return view('admin.dashboard.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Product::findOrFail($id);

        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($produk->image) {
                Storage::disk('public')->delete($produk->image);
            }
            $data['image'] = $request->file('image')->store('', 'public');
        }

        $produk->update($data);
        return redirect()->route('admin.dashboard.index')->with('success', 'Produk diupdate.');
    }

    public function destroy($id)
    {
        $produk = Product::findOrFail($id);
        if ($produk->image) {
            Storage::disk('public')->delete($produk->image);
        }
        $produk->delete();
        return redirect()->route('admin.dashboard.index')->with('success', 'Produk dihapus.');
    }
}

