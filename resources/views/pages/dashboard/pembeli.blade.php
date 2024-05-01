@extends('layout.pembeli')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex flex-column">
            <h4 class="text-capitalize ml-3 text-dark font-weight-bold">goopro all asset</h4>
            <nav class="nav">
                <a class="nav-link text-muted" href="#">Jakarta</a>
                <a class="nav-link text-muted" href="#">Bandung</a>
                <a class="nav-link text-muted" href="#">Depok</a>
                <a class="nav-link text-muted" href="#">Bogor</a>
                <a class="nav-link text-muted" href="#">Tangerang</a>
                <a class="nav-link text-muted" href="#">Bekasi</a>
            </nav>
        </div>
        <div class="dropdown">
            <button class="btn btn-info" type="button" data-toggle="dropdown" aria-expanded="false">
                Filter <i class="fa-solid fa-sliders"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item text-capitalize" href="#">all asset</a>
                <a class="dropdown-item text-capitalize" href="#">properti</a>
                <a class="dropdown-item text-capitalize" href="#">kendaraan</a>
                <a class="dropdown-item text-capitalize" href="#">license</a>
            </div>
        </div>
    </div>
    
    <!-- aset item -->
    <div class="row">
        <div class="col">
            <div class="card h-100">
                <img src="https://s3-alpha-sig.figma.com/img/d0d0/4898/e6fb7614bb708fc1c02a20caf25295a9?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=PUm4O4W8SAQRDhJWdMtTsbsyt5Qq7mFRgHgq0OTXA2vqYdsePmtgxRYWFQuuj~PzjJVzuy3sB2Witj3gdbEUn410CjMs6QysK2lD8JYvWRO7JNKK08dW31G-FEkWZKjlJzFeF16LjVEtuODrLr8Pq3YogxkNPI77I-n8IlwvzoGlCX5S9ScyR5SVZmvmeCkbF6igM9cNHJrdPiC~vegChqx567T6Vgs-2-ZyYLQjMR4VhV2YUg9kfqbVMyS38c12t~j5oBXWIrm~ACH7yAvKkLU1zr-q9JV41SQxgoXPqCTrogN5rNYccGYbQomKvZ6u3AQmdGoxVMjEQta44pFalQ__" class="card-img-top" alt="aset image" style="height: 398px;">
                <div class="card-body mt-4 mb-4">
                    <div class="row">
                    <div class="col-7">
                        <h5 class="card-title">Rumah No 2</h5>
                        <p class="card-text">Bandung, Jawa Barat</p>
                        <h6 class="card-subtitle text-muted">IDR 4.xxx.xxx.xxx</h6>
                    </div>
                    <div class="col-5 d-flex align-self-center justify-content-end">
                        <a href="/detailaset" class="btn btn-primary btn-lg" style="background: #3EC0D0 !important; border: none;">For sale</a>
                     </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://s3-alpha-sig.figma.com/img/6007/62b1/adf087847b598b6e2c81203a81597f8a?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ogb0oISpVM3LK3x0ZcCYYn~fXOCMwvwG7mZzfxX7L62755fUiRTelLbLtupRUMNDEl33Oh4JMDHI8A5AJyAE2bZPbjZOdtyIIR4WBV41cCYOImHre-g1FHzvLpQx2B77vi4u5Z3ooPMF36kuSPzYvd6lq~OaaiuORp7nmZnWsW51kw3RQQ2aHzHywyWGU6c-xVH5tkEbjnBhSRi1CAl9uLLqW4wmJAZaZLAhgCFytHgOVe2UTpOuOULXJxzjcuMizE4RiCL4Pkp0IaSZzJ4BxQ6gldiXmBP8uDDquk6vN93xqdxq-GfUprGHJpQVA5qpJhucd44U-pGjR7sUuLN9rg__" class="card-img-top" alt="aset image" style="height: 398px;">
                <div class="card-body mt-4 mb-4">
                    <div class="row">
                    <div class="col-7">
                        <h5 class="card-title">Apartment Lantai 7</h5>
                        <p class="card-text">Bandung, Jawa Barat</p>
                        <h6 class="card-subtitle text-muted">IDR 3.xxx.xxx/malam</h6>
                    </div>
                    <div class="col-5 d-flex align-self-center justify-content-end">
                        <a href="/detailaset" class="btn btn-primary btn-lg" style="background: #3EC0D0 !important; border: none;">For rent</a>
                     </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://s3-alpha-sig.figma.com/img/f5b0/a593/296b4ffad86786fd01867b17af3a33f3?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=FAWE4Hd4ZtOgBz7qJs3w8ZpC2OvKn8klA9odhd9IA92mSZGtf08yZgWrCaZSreV2i4oJJwosvOCStQxt1q7Jc-Fsy54dpkklS272mO36A68YZiX2NduJg-6pqE0wJdtFwlegSUoG6OSvzLPKNu2YiHQ3ar~cxHojAkq1nPgNn7Zp7OqoJ3lE58W8mS6PEi3pyxcGjlUof084VU-wNOc9nU1xpN1xE2WAr7tS65Bi4x7N4~Gff4Wpy6ksRXB2IaHXGsNw~OdUJk9U1yaLSL4cua3JdZzavMLvp18IDVoxkJ-~tiyWyKMEDlXcVbVqr0SIT-~n17Ovkil3Ndts2gRvtA__" class="card-img-top" alt="aset image" style="height: 398px;">
                <div class="card-body mt-4 mb-4">
                    <div class="row">
                    <div class="col-7">
                        <h5 class="card-title">Rumah No 35</h5>
                        <p class="card-text">Bandung, Jawa Barat</p>
                        <h6 class="card-subtitle text-muted">IDR 3.xxx.xxx.xxx</h6>
                    </div>
                    <div class="col-5 d-flex align-self-center justify-content-end">
                        <a href="/detailaset" class="btn btn-primary btn-lg" style="background: #3EC0D0 !important; border: none;">For sale</a>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection