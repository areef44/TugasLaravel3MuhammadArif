@extends('layouts.template')

@section('produk')
 
  <section style="background-color: #eee;">
  <div class="container">
    <div class="row">
    @foreach ($data as $row)
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0 mt-4">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Hot's Produk</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x2</p>
            </div>
          </div>
          <img src="{{ asset('photoproduk/'.$row->poto)}}"
            class="card-img-top" alt="Laptop" />
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted">{{ $row->kategorie->nama_kategori}}</a></p>
              <p class="small text-danger"></s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0">{{ $row->nama}}</h5>
              <h5 class="text-dark mb-0">Rp.{{ number_format($row->harga)}}</h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold">{{ $row->deskripsi }}</span></p>
        
            </div>
          </div>
        </div>
      </div>
       @endforeach
        
      </div>
    

      <div class="d-flex justify-content-center mt-5">
              <ul class="justify-content-center">
                   {{ $data->links() }}
              </ul>
      </div>
 
  </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
