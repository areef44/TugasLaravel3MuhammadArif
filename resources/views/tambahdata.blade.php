@extends('layouts.template')
@section('tambahProduk')
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/produk/insertdata" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Produk : </label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Produk">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga Produk : </label>
              <input type="number" name="harga" class="form-control" placeholder="Masukan Harga Produk">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Stok Produk : </label>
              <input type="number" name="deskripsi" class="form-control" placeholder="Masukan Stok Produk">
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
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
            <a class="btn btn-danger" href="/produk/tampildata" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-sign-out" aria-hidden="true"></i> Back</a>
          </form>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
