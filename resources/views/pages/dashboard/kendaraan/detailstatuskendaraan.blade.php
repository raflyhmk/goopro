@extends('layout.dashboard')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <div class="row">
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-outline-info shadow-sm mr-4">sertifikat asset</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-outline-info shadow-sm">iklankan asset</a>
         </div>
    </div>
    <!-- Brand Buttons -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold">Dijual Rumah No 2</h6>
            <div class="row">
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-outline-dark shadow-sm mr-3"><i class="fa-solid fa-print"></i> Print asset</a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa-solid fa-trash"></i> delete</a>
         </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZCdCMBeLrZkJzcWy2g7j77L_UAFfCjzojBDOSBN_2zQ&s" alt="image" class="w-100">
                </div>
                <div class="col-md-6">
                    <p>Nama Pemilik: Agus</p>
                    <p>Kota: Bandung</p>
                    <p>Kategori Asset: Rumah </p>
                    <p>Status Asset: Dijual</p>
                    <p>Harga Properti: Rp. 1000.000.000</p>
                    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <img src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg" alt="QR image" style="width: 142px;height: 142px">
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection