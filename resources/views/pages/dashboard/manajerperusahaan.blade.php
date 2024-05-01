@extends('layout.dashboard')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

                        <!-- aset Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
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
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card  shadow h-100 py-2" style="background: #3EC0D0;">
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
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="background: #3EC0D0;">
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
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="background: #3EC0D0;">
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

        <!-- Content Row -->

        <div class="row">

                        <!-- table area -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Total aset</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Judul</th>
                                                    <th>Kota</th>
                                                    <th>Status</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Judul</th>
                                                    <th>Kota</th>
                                                    <th>Status</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Rumah no 2</td>
                                                    <td>bandung</td>
                                                    <td>dijual</td>
                                                    <td><a href="#" class="text-decoration none text-reset">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Apart lantai 7</td>
                                                    <td>Bandung</td>
                                                    <td>disewa</td>
                                                    <td><a href="#" class="text-decoration none text-reset">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Rumah</td>
                                                    <td>Jakarta</td>
                                                    <td>Tersewa</td>
                                                    <td><a href="#" class="text-decoration none text-reset">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Rumah</td>
                                                    <td>Bandung</td>
                                                    <td>Terjual</td>
                                                    <td><a href="#" class="text-decoration none text-reset">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Rumah no 2</td>
                                                    <td>bandung</td>
                                                    <td>dijual</td>
                                                    <td><a href="#" class="text-decoration none text-reset">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Apart lantai 7</td>
                                                    <td>Bandung</td>
                                                    <td>disewa</td>
                                                    <td><a href="#" class="text-decoration none text-reset">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Rumah</td>
                                                    <td>Jakarta</td>
                                                    <td>Tersewa</td>
                                                    <td><a href="#" class="text-decoration none text-reset">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Rumah</td>
                                                    <td>Bandung</td>
                                                    <td>Terjual</td>
                                                    <td><a href="#" class="text-decoration none text-reset">view</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Status aset</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle" style="color: #00A6BB;"></i> Terjual
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle" style="color: #3EC0D0;"></i> Tersewa
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle" style="color: #00313C;"></i> Dijual
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle" style="color: #2C41FF;"></i> Disewa
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>

    </div>

@endsection