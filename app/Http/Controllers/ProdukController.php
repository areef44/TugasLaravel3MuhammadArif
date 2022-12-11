<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategorie;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // public function index()
    // {
    //     return view('home', ["title" => "Beranda", "judul" => "Artikel"]);
    // }
    public function dataproduk()
    {
        $data = Produk::paginate(3);
        return view('dataproduk', ["title" => "Produk", "judul" => "Produk"], compact('data'));
    }
    public function tampildata()
    {
        $data = Produk::Paginate(5);
        return view('tampildata', ["title" => "Kelola Produk", "judul" => "Kelola Produk"], compact('data'));
    }
    public function tambahdata()
    {
        $kategori = Kategorie::All();
        return view('tambahdata', [
            'kategori' => $kategori, "title" => "Tambah Produk", "judul" => "Tambah Produk"
        ]);
    }

    public function insertdata(Request $request)
    {

        $data = [
            'kategorie_id' => $request->input('kategorie_id'),
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi')

        ];
        if ($request->hasFile('poto')) {
            $file = $request->file('poto')->hashName();
            $request->file('poto')->move('photoproduk/', $file);
            $data['poto'] = $file;
        }
        $data = Produk::create($data);
        return redirect()->route('tampildata')->with('Success', 'Data Berhasil Ditambahkan');
    }

    public function detaildata($id)
    {
        $kategori = Kategorie::All();
        $data = Produk::find($id);
        // dd($data);
        return view('editdata', [
            'kategori' => $kategori,
            'data'     => $data,
            "title" => "Rubah Produk", "judul" => "Rubah Produk"
        ]);
    }

    public function updatedata(Request $request, $id)
    {
        $produk = Produk::find($id);
        $data = [
            'kategorie_id' => $request->input('kategorie_id'),
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi')

        ];
        if ($request->hasFile('poto')) {
            $file = $request->file('poto')->hashName();
            $request->file('poto')->move('photoproduk/', $file);
            $data['poto'] = $file;
        }
        $produk->update($data);
        return redirect()->route('tampildata')->with('Success', 'Data Berhasil Dirubah');
    }

    public function deletedata($id)
    {
        $data = Produk::find($id);
        $produk = $data->poto;
        unlink('photoproduk/' . $produk);
        $data->delete();
        return redirect()->route('tampildata')->with('Success', 'Data Berhasil Dihapus');
    }
}
