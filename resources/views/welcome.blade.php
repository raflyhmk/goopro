@extends('layout.user')
  @section('content')
  
    <!-- navbar -->
    <div class="container-fluid">
    @include('parts.user.navbar')
    </div>
    <!-- end  navbar -->

    <!-- banner hero-->
    <section id="banner-hero" class="mt-4 mb-5 ms-5 me-5">
      <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 col-lg-6 order-lg-first mt-sm-4 mt-md-0 d-flex justify-content-start">
          <h1 class="text-banner">
            Mengelola Asset untuk masa depan yang Lebih baik bersama Goopro
          </h1>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 order-sm-first d-flex justify-content-end">
            <img src="https://s3-alpha-sig.figma.com/img/793e/109a/02920d4247716b044e3311b92f9a323d?Expires=1714953600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=cueoXpN6rxIX2ZBwPuwW97vavCZfjXW7S-zqmjPwhigx2DzmV1ZTsAJdG4uH8~-JerORpzFfq~1gDNhxNUPFUmqIRBmaLjUfRlRWKLscG8FdHk45pcUAFXlaNbt0tnZ0q2VK2WhHxJ~g8WgMOldVCcLPOpXtJ8bzr2g6LEOQSxLu8oYs3l9zWN98c9p4EKyMm-fpPNEILK0EkxVSagTR4KZR~JfA74fjCs4BhnZ8oGgjovb4XZ1oe~N2AKG9ztgw-xp-qmV0kegRzw~uyCuCRVYgEFWZ7AHrV30LtXiUZKGNoWl~o~qVhaJ-qflxz5HFfbX0Eu3V04jDm3c9pynKRQ__" alt="image-banner" class="image-banner">
        </div>
      </div>
    </div>
    </section>
    <!-- end banner hero-->

    <!-- tagline -->
    <section id="tagline" class="mt-4 mb-5">
      <div class="container">
        <center>
          <h3 class="tagline-text text-white">
            Dalam manajemen aset, terkadang orang masih menggunakan cara konvensional atau tradisional dalam menjual, menyewa, atau membeli aset seperti lahan tanah. Oleh karena itu, kami akan menciptakan sebuah solusi dengan membuat aplikasi berbasis website untuk mengelola aset yang dimiliki.
          </h3>
        </center>
      </div>
    </section>
    <!-- end tagline -->

    <!-- aset cek lagi-->
    <section id="aset" class="mt-4 mb-5 ms-5 me-5">
      <div class="container-fluid">
        <h1 class="title-aset mb-4">
          Asset
        </h1>
        <div class="row">
          <div class="col-sm-12 col-xxl-6 list-aset rounded">
            <div class="col-12 d-flex justify-content-center">
              <i class="fa-solid fa-house rounded py-4 px-4 mx-5 my-5"></i>
              <i class="fa-solid fa-hotel rounded py-4 px-4 mx-5 my-5"></i>
              <i class="fa-solid fa-car rounded py-4 px-4 mx-5 my-5"></i>
            </div>
             <div class="col-12 d-flex justify-content-center">
              <i class="fa-solid fa-motorcycle rounded py-4 px-4 mx-5 my-5"></i>
              <i class="fa-solid fa-file-contract rounded py-4 px-4 mx-5 my-5"></i>
              <i class="fa-solid fa-map-location-dot rounded py-4 px-4 mx-5 my-5"></i>
            </div>
          </div>
          <div class="col-sm-12 col-xxl-6 mt-sm-4 mt-xxl-0 d-flex justify-content-end justify-content-sm-center">
            <img src="https://s3-alpha-sig.figma.com/img/e0c4/1359/f0eb48c8947837a035259203c16e1b09?Expires=1714953600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=XrFNwChPvPjpXQ2GzXRdnO~EXgm4p-6qH6otrsByHxYm6zWz4B7c0of4DQ5lA0H98CkWgRGxgibXyOtCKTXKYe7tro1iQ~SXvoXa6vMdENBA~hjfiXrSC~rXuBoF80IgVJUlSF0Plc0C~uQzuLFBI6TruGe-eWF9OzFhwupyks6fM0Y77widqXilxcfFm6Hg5SPSL8JjtNVrrw3R9WC1ijFnCGadlYsJFJZoEjL98HPHxuJpkY5IV4klpJzIFBAzqwdL-nXk0QNkMsL9pk8XqhxKu3i~8hJ5QJtgt46LkwlXGYXMxKTyWLhBomFEnv10Us0Hel5HUpkXzW2rUAH9JA__" alt="" class="image-aset rounded">
          </div>
        </div>
      </div>
    </section>
    <!-- end aset -->

    <!-- fitur -->
    <section id="fitur" class="mt-4 mb-5">
      <div class="container-fluid">
        <h1 class="title-fitur mb-4 ms-5">
          Fitur
        </h1>
        <div class="row">
          <div class="col-sm-12 col-lg-4 mt-sm-4 mt-lg-0 d-flex justify-content-center set-fitur">
            <div class="card pb-5 card-aset" style="width: 436px; height:379px;">
              <div class="card-body">
                <h1 class="card-title-fitur text-center mt-4 m-5">Pengingat</h1>
                <p class="card-text-fitur text-center">Fitur ini memungkinkan akun manager untuk mendapatkan sebuah notifikasi jika pemilik asset mengajukan iklankan properti</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-4 mt-sm-4 mt-lg-0 d-flex justify-content-center set-fitur">
            <div class="card pb-5 card-aset" style="width: 436px; height:379px;">
              <div class="card-body">
                <h1 class="card-title-fitur text-center mt-4 m-5">Pelacakan Asset</h1>
                <p class="card-text-fitur text-center">Fitur ini memungkinkan pengguna untuk melacak pergerakan dan lokasi aset dengan mudah</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-4 mt-sm-4 mt-lg-0 d-flex justify-content-center set-fitur">
            <div class="card pb-5 card-aset" style="width: 436px; height:379px;">
              <div class="card-body">
                <h1 class="card-title-fitur text-center mt-4 m-5">Filter</h1>
                <p class="card-text-fitur text-center">Fitur ini memungkinkan pengguna untuk menyaring dan mengelompokkan aset berdasarkan kriteria tertentu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end fitur -->

    <!-- artikel -->
    <section id="id" class="mt-4 mb-5 ms-5 me-5">
      <div class="container-fluid">
        <h1 class="text-center mb-4">
          Article
        </h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-12 col-xxl-6 list-article">
                  <div class="card mb-3" style="max-width: 840px; border:none;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="https://s3-alpha-sig.figma.com/img/8427/3b08/c55703b607984a1378356c2338929632?Expires=1714953600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=iQNuCjWvBiBkbk8-3FlXGNpUNbXUcwYA9ZXXiCVzirOAWYBDhqdnMcSDBnXUKeRosAassjxoI5UeKRYAPDC8fvKv-5iSOMeZlOUejtlAWB~t0RuB89OrbnBRZsgiWIiyIpRfL4ihz1PcqCjm5~-MyoxgUY-EROV7dM-kH6xtDMso0BxNwwmlq7te3HBb2nz4UnWtAM2Yh8HveO2e77Ii5XKKW2uYFgnjll3w3zAmrriHM0tdY5I13kCB4eItnys9Jg4z8nFIuiS~OiyinrEtx1Pq1tV49ICzpBFDZQoVmJiBW21baZ1EV0dE-yfbC8EOsbf~9qcAwPZTvwytjVFqmg__" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h3 class="card-title">Manfaat dan Strategi Pengelolaan Aset untuk Bisnis Lebih Efektif</h3>
                          <p class="card-text fs-5"><small class="text-muted">8 Januari</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-xxl-6 list-article">
                  <div class="card mb-3" style="max-width: 840px; border:none;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="https://s3-alpha-sig.figma.com/img/8427/3b08/c55703b607984a1378356c2338929632?Expires=1714953600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=iQNuCjWvBiBkbk8-3FlXGNpUNbXUcwYA9ZXXiCVzirOAWYBDhqdnMcSDBnXUKeRosAassjxoI5UeKRYAPDC8fvKv-5iSOMeZlOUejtlAWB~t0RuB89OrbnBRZsgiWIiyIpRfL4ihz1PcqCjm5~-MyoxgUY-EROV7dM-kH6xtDMso0BxNwwmlq7te3HBb2nz4UnWtAM2Yh8HveO2e77Ii5XKKW2uYFgnjll3w3zAmrriHM0tdY5I13kCB4eItnys9Jg4z8nFIuiS~OiyinrEtx1Pq1tV49ICzpBFDZQoVmJiBW21baZ1EV0dE-yfbC8EOsbf~9qcAwPZTvwytjVFqmg__" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h3 class="card-title">Manfaat dan Strategi Pengelolaan Aset untuk Bisnis Lebih Efektif</h3>
                          <p class="card-text fs-5"><small class="text-muted">8 Januari</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-12 col-xxl-6 list-article">
                  <div class="card mb-3" style="max-width: 840px; border:none;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="https://asset.kompas.com/crops/I3WeujW7n73MsdNd7bEyAw-QkX8=/8x0:683x450/1200x800/data/photo/2022/02/09/6202dddd220cf.jpg" class="img-fluid rounded-start" alt="article-image">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h3 class="card-title">Manfaat dan Strategi Pengelolaan Aset untuk Bisnis Lebih Efektif</h3>
                          <p class="card-text fs-5"><small class="text-muted">8 Januari</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-xxl-6 list-article">
                  <div class="card mb-3" style="max-width: 840px; border:none;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="https://asset.kompas.com/crops/I3WeujW7n73MsdNd7bEyAw-QkX8=/8x0:683x450/1200x800/data/photo/2022/02/09/6202dddd220cf.jpg" class="img-fluid rounded-start" alt="article-image">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h3 class="card-title">Manfaat dan Strategi Pengelolaan Aset untuk Bisnis Lebih Efektif</h3>
                          <p class="card-text fs-5"><small class="text-muted">8 Januari</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- end artikel -->

    <!-- about us -->
    <section id="aboutUs" class="mt-4 mb-5 ms-5 me-5">
      <div class="container-fluid">
        <h1 class="text-center">
          About us
        </h1>
        <!-- tentnang perusahaan -->
        <div class="row mt-sm-0 mt-xxl-4 align-items-center">
          <div class="col-sm-12 col-xxl-8 tentang-perusahaan rounded ">
            <div class="card card-tentang-perusahaan" style="width: 28,4375rem;">
              <div class="card-body">
                <h5 class="card-title title-tentang-perusahaan text-center">Tentang perusahaan <br> Goopro</h5>
                <p class="card-text subtitle-tentang-perusahaan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xxl-4 mt-sm-4 mt-xxl-0 logo-perusahaan d-flex justify-content-center">
            <img src="https://s3-alpha-sig.figma.com/img/2f77/a004/fc6d8f294be49a718e5a01392cca75a2?Expires=1714953600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=q5~9PsF7MJOUyiZE9zZoEoDdIc3~GMkRS0-BLykIUGvUWU5qZ~LupNBYd9goSsxKWFh7D2Yjrg~Zf7JDjILfA3jcb7Lkza2td-P~ISRYuhnnH5mdGgINAjKkNCyEj~Dx1vVYSzmx9A7LMgQiGtf-kdRcf8M1KApPa6w5Fj3sJZ4y4577gd6kZxMSHnvX73zuUonAXMvLffatiD1IWt~MoNFN74qs9XCbsQ5bxESR285RZmhT3iPCpHmp0njnk5t5YduI9-IlTdRHS2FMn4Z4zZizGkpkAIG-xqIAGUhZf~4yEE1D2aqgFAvKudLU4~D4-Cu1J0u9ML3wGmH5OJ0ERA__" class="img-thumbnail" alt="logo-perusahaan" width="406px">
          </div>
        </div>
        <!-- end tentang perusahaan -->

        <!-- harapan kita -->
        <div class="row mt-5 align-items-center">
          <div class="col-sm-12 col-xxl-4 order-xxl-first d-flex justify-content-center">
            <img src="https://s3-alpha-sig.figma.com/img/382e/e935/1039b4549a0fb11fdf18155be4e5031e?Expires=1714953600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=RTtdFnOwcrz60kz2Bg8yRb1Yhi02o8efo2yiq~REdWh72LlAa5q7DygzkeM0o~8vwKhTBqzJuqliftaJsoajZVI6r7sMLo0lAaLcL1SUmy~J3rLgvLFbVh4G6sK9SJqO78DhX9G7KtLVx1~jPvyaE7Xn4xGzSzDWoiujLVSA3b8rLqionZZTPYD6LxD-ankkKPtfzb7ykgd4tUZl1Qfub4z8jmAAUcci6KoLs-lRH6JEn~5n7VOZOSCJxynv0uNnWDPNgmVfGAoet62kVDJ1oijNQa4~c-vt3FnloE1pzf1Ot~7VepR7V8s8E4A~6aJSudK14sy-S87r2kOfRPbGXg__" class="img-thumbnail" alt="harapan-kita">
          </div>
          <div class="col-sm-12 col-xxl-8 order-sm-first">
            <div class="col d-flex justify-content-center">
              <h1 class="title-harapan-kita text-center">
              Harapan Kita
              </h1>
            </div>
            <div class="col d-flex justify-content-center">
              <p class="subtitle-harapan-kita">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            </p>
            </div>
          </div>
        </div>
        <!-- end harapan kita -->
      </div>
    </section>
    <!-- end about us -->

    <!-- daftar -->
    <section id="daftar" class="mt-4 mb-5">
      <div class="container">
        <center>
          <h1 class="daftar-text pt-5 p-4 text-white">
            Menjaga Aset, Meningkatkan Nilai: <br> Bersama Goopro Management Asset
          </h1>
          <button type="button" class="btn btn-light btn-daftar mb-5" onclick="event.preventDefault(); location.href='{{ url('register') }}'">Daftar sekarang -></button>
        </center>
      </div>
    </section>
    <!-- daftar -->

    <!-- footer -->
    <div class="container-fluid">
    @include('parts.user.footer')
    </div>
    <!-- end footer -->


  @endsection