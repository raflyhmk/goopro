@extends('layout.dashboard')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <!-- graphic bar -->
             <div class="col-xl-8 col-lg-7">
                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold">Diagram aset</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
             </div>
             <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Aset terjual</h5>
                        <p class="card-text h1">10 <span class="badge badge-pill badge-danger" style="font-size: 10px;"><i class="fa-solid fa-arrow-down"></i> 12.5%</span><span style="font-size: 14px;"> Terakhir bulan lalu</span></p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Asset Tersewa</h5>
                        <p class="card-text h1">5 <span class="badge badge-pill badge-success" style="font-size: 10px;"><i class="fa-solid fa-arrow-up"></i> 32.5%</span><span style="font-size: 14px;"> Terakhir bulan lalu</span></p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Asset Baru</h5>
                        <p class="card-text h1">22 <span class="badge badge-pill badge-success" style="font-size: 10px;"><i class="fa-solid fa-arrow-up"></i> 32.5%</span><span style="font-size: 14px;"> Terakhir bulan lalu</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- data table -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">Aset client</h6>
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
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Judul</th>
                                            <th>kota</th>
                                            <th>Kategori</th>
                                            <th>Status</th>
                                            <th>Email</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Apartment lantai 3</td>
                                            <td>Bandung</td>
                                            <td>Properti</td>
                                            <td>Disewa</td>
                                            <td><u>example@gmail.com</u></td>
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>BMW E30 318i</td>
                                            <td>Bandung</td>
                                            <td>Kendaraan</td>
                                            <td>Dijual</td>
                                            <td><u>example@gmail.com</u></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div>
@endsection