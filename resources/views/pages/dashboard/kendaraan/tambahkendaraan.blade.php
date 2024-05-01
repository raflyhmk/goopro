@extends('layout.pemilikaset')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- insert form -->
        <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-capitalize" style="color: #3EC0D0;">
                  tambah kendaraan
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <form enctype="multipart/form-data" method="POST" action="" class="form-input" >
                    @csrf
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Nama pemilik</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan Nama pemilik..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Nama kendaraan</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan nama kendaraan..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">kota</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan kota..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">status kendaraan</label>
                        <select class="custom-select" id="validationDefault04" required>
                          <option selected disabled value="">pilih status kendaraan</option>
                          <option>dijual</option>
                          <option>disewa</option>
                          <option>dikelola</option>
                        </select>
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">kategori kendaraan</label>
                        <select class="custom-select" id="validationDefault04" required>
                          <option selected disabled value="">pilih kategori kendaraan</option>
                          <option>mobil</option>
                          <option>motor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">harga kendaraan</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan harga kendaraan..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1">deskripsi</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">tahun kendaraan</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan tahun kendaraan..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Foto</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">tambahkan legalitas(STNK, BPKB)</label>
                      <input class="form-control" type="file" id="formFile">
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