<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Men;
use App\Models\Women;
use App\Http\Requests\ProdukRequest;
use App\Models\Category;
// FIle => untuk membantu mengupload gambar
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{
    function  show()
    {
        $men = Produk::where('category_id', 1)->get();
        $women = Produk::where('category_id', 2)->get();

        return view('home', [
            'title' => 'home',
            'mens' => $men,
            'womens' => $women,
        ]);
    }

    function showsingle(Produk $produk)
    {
        return view('produk', [
            "title" => "single produk",
            'produk' => $produk
        ]);
    }

    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datas = Produk::simplePaginate(5);

        // $datas = Produk::where('nama', 'LIKE', '%' . $keyword . '%')
        //     ->orWhere('harga', 'LIKE', '%' . $keyword . '%')
        //     ->paginate();
        // ->get();
        return view('produk.produks', compact('datas', 'keyword'), [
            "title" => "produks"
        ]);
    }

    public function create()
    {
        $model = new Produk;
        $category = Category::all();
        // dd($category);
        return view('produk.create', compact('model', 'category'), [
            "title" => "produks"
        ]);
    }

    public function store(ProdukRequest $request)
    {
        $model = new Produk();
        $model->category_id = $request->kategori;
        $model->nama = $request->nama;
        $model->slug = $request->slug;
        $model->deskripsi = $request->deskripsi;
        $model->harga = $request->harga;
        // $model->photo = $request->photo;

        // upload file
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $name_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('img', $name_file);
            $model->photo = $name_file;
        }
        $model->save();

        // return redirect('produks');
        // menggunakan session ->with(2 parameter 1 kondisi 1 lagi valuenya)
        return redirect('produks')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $model = Produk::find($id);
        return view('produk.edit', compact('model'), [
            "title" => "produks"
        ]);
    }

    public function update(Request $request, $id)
    {
        $model = Produk::find($id);
        $model->category_id = $request->kategori;
        $model->nama = $request->nama;
        $model->slug = $request->slug;
        $model->deskripsi = $request->deskripsi;
        $model->harga = $request->harga;
        // $model->photo = $request->photo;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $name_file = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('img', $name_file);

            // hapus foto sebelumnya sebelum di upload
            File::delete('img', $model->photo);
            $model->photo = $name_file;
        }

        $model->save();

        return redirect('produks')->with('success', 'Data berhasil diperbaharui');
    }

    public function destroy($id)
    {
        $model = Produk::find($id);
        $model->delete();
        return redirect('/produks')->with('success', 'Data berhasil dihapus');;
    }

    public function men()
    {
        $men = Produk::where('category_id', 1)->get();

        return view('category.men', [
            'title' => 'Men',
            'mens' => $men,
        ]);
    }

    public function women()
    {
        $women = Produk::where('category_id', 2)->get();

        return view('category.women', [
            'title' => 'Women',
            'womens' => $women,
        ]);
    }
}
