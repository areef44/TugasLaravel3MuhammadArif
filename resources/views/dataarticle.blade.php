@extends('layouts.template');


@section('artikel')
<div class="container">
<div class="d-flex justify-content-end mt-2">
    <a href={{ "/article/tambaharticle" }} class="btn btn-primary "><i class="fa-solid fa-square-plus"></i>  Add</a>
    <a href={{ "/dashboard" }} class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i> Back</a>
    </a>
</div>

<table class="table table-striped my-2">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Author</th>
      <th scope="col">Artikel</th>
      <th scope="col">Dibuat</th>
      <th scope="col">Diperbaharui</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @php
      $no=1
  @endphp
  @foreach($article as $key => $item)
  <tbody>
    <tr>
      <th scope="row">{{ $article->firstItem() + $key }}</th>
      <td>{{ $item->title }}</td>
      <td>{{ $item->author }}</td>
      <td>{!! $item->content !!}</td>
      <td>{{ $item->created_at->format('D M Y')}}</td>
      <td>{{ $item->created_at->diffForHumans()}}</td>
      <td>
        <img src="{{ asset('photoarticles/'.$item->picture) }}"" alt="picture" style="width: 100px">
      </td>
      <td>
        <a href="/article/detailarticle/{{ $item->id }}" class="btn btn-success"><i class="fa-sharp fa-solid fa-pen-to-square"></i> </a>
        <a href="deletearticle/{{ $item->id }}" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
<div class="ms-5">
</div>

 Menampilkan
  {{ $article -> firstItem() }}
  sampai
  {{ $article -> lastItem() }}
  dari total
  {{ $article -> total() }}
  artikel

  <div class="d-flex justify-content-end">
              <ul class="justify-content-center">
                   {{ $article->links() }}
              </ul>
  </div>
   
  </div>




@endsection
