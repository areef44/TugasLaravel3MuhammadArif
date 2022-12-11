@extends('layouts.template')

@section('produkmanage')


    @if($message = Session::get('Success'))
      <div class="alert alert-secondary" role="alert">
      {{ $message }}
    </div>
    @endif
    <div class="container">
    <div class="d-flex justify-content-end mt-2">
    <a class="btn btn-primary ms-5" href="/tambahdata" role="button" 
    aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-square-plus"></i>  Tambah</a>
    </div>

      <table class="table table-bordered text-center my-2">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Kategori</th>
      <th scope="col">Gambar</th>
      <th scope="col">Dibuat</th>
      <th scope="col">Diperbaharui</th>
      <th scope= "col">Aksi</th>
    </tr>
  </thead>
  @php
      $no=1
  @endphp
  @foreach($data as $key => $item)
  <tbody>
    <tr>
      <th scope="row">{{ $data-> firstItem() + $key }}</th>
      <td>{{ $item->nama}}</td>
      <td>{{ $item->harga}}</td>
      <td>{{ $item->deskripsi}}</td>
      <td>{{ $item->kategorie->nama_kategori }}</td>
      <td>
        <img src="{{ asset('photoproduk/'.$item->poto)}}" alt="produk" style="width: 100px">
      </td>
      <td>{{ $item->created_at->format('D M Y')}}</td>
      <td>{{ $item->created_at->diffForHumans()}}</td>
      <td><a href="detaildata/{{ $item->id }}" class="btn btn-success"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
          <a href="deletedata/{{ $item->id }}" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
    </tr>
  </tbody>
  @endforeach
</table>

  <div>
 Menampilkan
  {{ $data ->firstItem() }}
  sampai
  {{ $data -> lastItem() }}
  dari total
  {{ $data -> total() }}
  produk
  </div>

  <div class="d-flex justify-content-end me-0">
              <ul class="justify-content-center">
                   {{ $data->links() }}
              </ul>
            </div>
    </div>
     


  
@endsection
    
