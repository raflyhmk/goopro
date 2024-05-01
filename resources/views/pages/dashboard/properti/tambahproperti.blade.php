@extends('layout.pemilikaset')

@section('content')

<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- insert form -->
        <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-capitalize" style="color: #3EC0D0;">
                  tambah properti
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <form enctype="multipart/form-data" method="POST" action="" class="form-input" >
                    @csrf
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Judul</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan Judul..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Nama pemilik</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan nama pemilik..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Kota</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan kota..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                    <label class="form-label mb-3" for="nohp">Kategori properti</label><br>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">Rumah</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">Apartement</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                          <label class="form-check-label" for="inlineRadio3">Ruko</label>
                        </div>
                        <input
                          type="text"
                          class="form-control mt-3"
                          placeholder="lainnya..."
                          name="name"
                          required
                        />
                    </div>
                    <div class="mb-3">
                      <label for="inputState">Status properti</label>
                      <select id="inputState" class="form-control">
                        <option selected disabled>pilih kebutuhan asset</option>
                        <option>dijual</option>
                        <option>disewa</option>
                        <option>dikelola</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Harga</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan kota..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1">deskripsi</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Foto</label>
                      <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">tambahkan sertifikat</label>
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