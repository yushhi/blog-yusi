<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Artikel;
use App\Models\Category;

class ArtikelController extends Controller
{

    public function index()
    {
        $artikels = Artikel::latest()->simplePaginate(5);
        return view('admin.dashboard', compact('artikels'));
    }

    public function view()
    {
        $categories = Category::all();
        $artikels = Artikel::all();
        return view('user.artikel', compact('artikels', 'categories'));
    }

    public function show(Artikel $id)
    {
        $categories = Category::all();
        $artikels = Artikel::all();
        return view('user.detail-artikel', [
            'artikel' => $id,
        ]);
    }

    public function tambahArtikel()
    {
        $categories = Category::all();
        return view('admin.create-artikel', compact('categories'));
    }

    public function upload(){
		$gambar = Artikel::orderBy('created_at', 'desc')->paginate(1);
		return view('admin.create-artikel',['gambar' => $gambar]);

	}

    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'images';
		$file->move($tujuan_upload,$nama_file);

        Artikel::create([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->judul),
            'keterangan' => $request->keterangan,
            'file' => $nama_file,
        ]);

        Request::create($request);
        return redirect('dashboard')->with('statusGroup', 'Data Berhasil Dibuat');
    }

    public function stage($id)
    {
        // return "stage";
        $products = Products::all();
        return view('products', compact('products'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findorfail($id);
		return view('admin.edit-artikel', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        

        $artikel = Artikel::findorfail($id);
		$artikel->update($request->all());
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

        if($request->hasFile('file')){
            $file = request()->file('file');
            $nama_file = time() . '.' . $file->getClientOriginalExtension();
            $tujuan_upload = public_path('/images/');
            $file->move($tujuan_upload, $nama_file);
            
            Artikel::where('id', $id)->update([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'file' => $nama_file,
            ]);
        }
        
		return redirect('dashboard')->with('statusGroup', 'Data Berhasil Dirubah');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect('dashboard')->with('statusGroup', 'Data Berhasil Dirubah');
    }

}
