@extends('layout.pemilikaset')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-dark font-weight-bold text-capitalize">Daftar properti</h1>
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
        <button type="button" class="btn btn-outline-info btn-lg mb-4" onclick="event.preventDefault(); location.href='{{ url('tambahproperti') }}'">+ Tambah properti</button>
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">Activity</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Judul</th>
                                            <th>kota</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Judul</th>
                                            <th>kota</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Detail</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Apartment lantai 3</td>
                                            <td>Bandung</td>
                                            <td>Properti</td>
                                            <td>Disewa</td>
                                            <td><i class="fa-solid fa-pen"></i></td>
                                            <td><a href="/detailstatusproperti" class="text-muted">lihat</a></td>
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>Rumah</td>
                                            <td>Bandung</td>
                                            <td>Properti</td>
                                            <td>Dijual</td>
                                            <td><i class="fa-solid fa-pen"></i></td>
                                            <td><a href="/detailstatusproperti" class="text-muted">lihat</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div>

@endsection