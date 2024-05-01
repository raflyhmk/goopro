@extends('layout.pemilikaset')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark font-weight-bold text-capitalize">status properti</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- aset Card Example -->
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100 py-2" style="background: #3EC0D0;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1 text-white">
                                                Total Asset</div>
                                <div class="h5 mb-0 font-weight-bold text-white">2</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-laptop-file fa-2xl text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- dijual Card Example -->
            <div class="col-md-4 mb-4">
                <div class="card  shadow h-100 py-2" style="background: #3EC0D0;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Dijual</div>
                                <div class="h5 mb-0 font-weight-bold text-white">1</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-ticket fa-rotate-by fa-2xl text-white" style="--fa-rotate-angle: 45deg;"></i>
                            </div>
                         </div>
                    </div>
                 </div>
            </div>

            <!-- terjual Card Example -->
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100 py-2" style="background: #3EC0D0;">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                terjual</div>
                                <div class="h5 mb-0 font-weight-bold text-white">0</div>
                            </div>
                            <div class="col-auto">
                                 <i class="fa-solid fa-bag-shopping fa-2xl text-white"></i>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>

            <!-- Disewa Card Example -->
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100 py-2" style="background: #3EC0D0;">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Disewa</div>
                                <div class="h5 mb-0 font-weight-bold text-white">1</div>
                            </div>
                            <div class="col-auto">
                                 <i class="fa-solid fa-arrow-up-right-from-square fa-2xl text-white"></i>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>

            <!-- Tersewa Card Example -->
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100 py-2" style="background: #3EC0D0;">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Tersewa</div>
                                <div class="h5 mb-0 font-weight-bold text-white">0</div>
                            </div>
                            <div class="col-auto">
                                 <i class="fa-solid fa-arrow-up-right-from-square fa-rotate-180 fa-2x text-white"></i>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row row-cols-3 g-3">
                        <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body mt-4 mb-4">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title">Sertifikat</h5>
                                                <p class="card-text">Apartement lantai 7</p>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-primary btn-lg" style="background: #3EC0D0 !important; border: none;">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body mt-4 mb-4">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title">Legalitas</h5>
                                            <p class="card-text">Mobil BMW E30</p>
                                        </div>
                                        <div class="col text-right">
                                            <a href="#" class="btn btn-primary btn-lg" style="background: #3EC0D0 !important; border: none;">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body mt-4 mb-4">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title">Sertifikat</h5>
                                            <p class="card-text">Rumah No 2</p>
                                        </div>
                                        <div class="col text-right">
                                            <a href="#" class="btn btn-primary btn-lg" style="background: #3EC0D0 !important; border: none;">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev" style="background: #292929; width: 45px; height: 45px; display: flex; align-self: center">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next" style="background: #292929; width: 45px; height: 45px; align-self: center; align-self: center">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>

@endsection