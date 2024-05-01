@extends('layout.pemilikaset')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-dark font-weight-bold">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- aset Card Example -->
            <div class="col-md-4 offset-md-2 mb-4">
                            <div class="card shadow h-100 py-2" style="background: #3EC0D0;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-white">
                                                Aset</div>
                                            <div class="h5 mb-0 font-weight-bold text-white">4</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-laptop-file fa-2xl text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

            <!-- properti Card Example -->
            <div class="col-md-4 mb-4">
                            <div class="card  shadow h-100 py-2" style="background: #3EC0D0; ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Properti</div>
                                            <div class="h5 mb-0 font-weight-bold text-white">2</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-briefcase fa-2xl text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

            <!-- kendaraan Card Example -->
            <div class="col-md-4 offset-md-2 mb-4">
                            <div class="card shadow h-100 py-2" style="background: #3EC0D0; ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Kendaraan</div>
                                            <div class="h5 mb-0 font-weight-bold text-white">2</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-car fa-2xl text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

            <!-- lisensi Card Example -->
            <div class="col-md-4 mb-4">
                            <div class="card shadow h-100 py-2" style="background: #3EC0D0; ">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                Lisensi</div>
                                            <div class="h5 mb-0 font-weight-bold text-white">4</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-id-card fa-2xl text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
        <div class="row align-self-center">
            <span class="h3 font-weight-normal mr-2">Filter</span>
            <div class="dropdown">
            <button class="btn btn-light border dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                All asset
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        </div>
    </div>

@endsection