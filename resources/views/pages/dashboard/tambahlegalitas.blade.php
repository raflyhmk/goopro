@extends('layout.pemilikaset')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- insert form -->
        <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-capitalize" style="color: #3EC0D0;">
                  tambah legalitas kendaraan
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <form enctype="multipart/form-data" method="POST" action="" class="form-input" >
                    @csrf
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Nama kendaraan</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan Nama kendaraan..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Nama pemilik kendaraan</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan nama pemilik..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Merk/model</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan merk/model..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">warna</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan warna..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">tahun pembuatan</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan tahun pembuatan..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <button type="button" class="btn btn-outline-info">submit</button>
                    </div>
                  </form>               
                </div>
              </div>
        </div>
    </div>

@endsection