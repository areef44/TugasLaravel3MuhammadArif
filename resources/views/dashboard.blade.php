@extends('layouts.template')

@section('admin')

<main id="main">

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

        
          <div class="col-lg-4 mt-5">

            <div class="sidebar py-5">
          

              <h3 class="sidebar-title">Beranda Admin</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="/article/dataarticle"><button type="button" class="btn btn-secondary">Kelola Artikel</button></a></li>
                  <li><a href="/produk/tampildata"><button type="button" class="btn btn-secondary">Kelola Produk</button></a></li>
                  <li><a href={{ route('logout') }} class="btn btn-danger text-white"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
                </ul>
              </div><!-- End sidebar categories-->

              

              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

            <div class="col-lg-8 entries">
            <div class="text-center">
                 <h1>Selamat Datang di Halaman Administrator</h1>
                 
            </div>
            <div class="text-center py-5">
                <img src="assets/img/admin.jpg" alt="" width="80%">
            </div>
           

         
            <div class="d-flex justify-content-center">
              <ul class="justify-content-center">
                   {{-- {{ $article->links() }} --}}
              </ul>
            </div>

          </div><!-- End blog entries list -->


        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

@endsection