@extends('layouts.template')

@section('tambahArtikel')
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/article/insertarticle" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Judul Artikel : </label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Author : </label>
                <input type="text" name="author" class="form-control" placeholder="Masukan Nama Author">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Content : </label><br>
                <div class="form-group">
                  {{-- <textarea id="w3review" name="content" rows="5%" cols="70%">
                </textarea> --}}
                <div id="editor">
                  <textarea name="content" id="content" cols="30" rows="10"></textarea>
                </div>
                <script>
                ClassicEditor
                    .create( document.querySelector( '#content' ) )
                    .then( editor => {
                    console.log( editor );
                    } )
                    .catch( error => {
                    console.error( error );
                    } );
                </script>
                </div>
              </div>
              <div>
                <label for="exampleInputEmail1">Gambar:</label><br>
                <input type="file" name="picture" class="mb-4">
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
              <a class="btn btn-danger" href="{{"/article/dataarticle"}}" role="button" aria-expanded="false" aria-controls="collapseExample">Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection