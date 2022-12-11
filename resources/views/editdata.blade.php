@extends('layouts.template');

@section('editdata')

  <h3 class="text-center">Halaman Edit Data Produk</h3>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Produk : </label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
                placeholder="Masukan Nama Produk" value="{{ $data->nama}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga Produk : </label>
                <input type="number" name="harga" class="form-control" 
                placeholder="Masukan Harga Produk" value="{{ $data->harga}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Stok Produk : </label>
                <input type="number" name="deskripsi" class="form-control" 
                placeholder="Masukan Stok Produk" value="{{ $data->deskripsi}}">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Kategori : </label>
              <select name="kategorie_id" id="">
                @foreach($kategori as $category)
                  <option value="{{$category->id}}">{{ $category->nama_kategori}}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label for="exampleInputEmail1">Pilih Gambar:</label><br>
              <input type="file" name="poto" class="mb-4">
            </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
              <a class="btn btn-primary" href="/tampildata" role="button" aria-expanded="false" aria-controls="collapseExample">Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection

