@extends('layout.user')
@section('content')


<div class="container mt-5">
    <h1>Select User Type</h1>
    <p>You can set the role according to your needs</p>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" data-bs-items="3">
        <div class="carousel-item active">
            <div class="row row-cols-3">
                <div class="col" onclick="addBorder(this)">
                        <div class="card">
                            <i class="fa-solid fa-bag-shopping card-img-top text-center mt-5" style="color: #3ec0d0; font-size: 160px;"></i>
                            <div class="card-body mt-4 mb-4 text-center">
                                <h5 class="card-title">Pembeli Asset</h5>
                                <p class="card-text">Melihat dan membeli asset</p>
                            </div>
                        </div>
                </div>
                <div class="col" onclick="addBorder(this)">
                    <div class="card">
                        <i class="fa-solid fa-user-tie text-center mt-5" style="color: #3ec0d0; font-size: 160px;"></i>
                        <div class="card-body mt-4 mb-4 text-center">
                            <h5 class="card-title">Manager</h5>
                            <p class="card-text">Mengelola Asset pemilik & mengkonfirmasi ke admin</p>
                        </div>
                    </div>
                </div>
                <div class="col" onclick="addBorder(this)">
                    <div class="card">
                        <i class="fa-solid fa-shop card-img-top text-center mt-5" style="color: #3ec0d0; font-size: 160px;"></i>
                        <div class="card-body mt-4 mb-4 text-center">
                            <h5 class="card-title">Pemilik Asset</h5>
                            <p class="card-text">Mengatur penjualan asset</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="carousel-item">
            <div class="row row-cols-3">
                <div class="col" onclick="addBorder(this)">
                            <div class="card">
                                <i class="fa-solid fa-building card-img-top text-center mt-5" style="color: #3ec0d0; font-size: 160px;"></i>
                                <div class="card-body mt-4 mb-4 text-center">
                                    <h5 class="card-title">Admin</h5>
                                    <p class="card-text">Konfirmasi asset dan mengelola asset yang ada pada manager</p>
                                </div>
                            </div>
                </div>
            </div> 
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <center><button type="submit" class="btn btn-primary rounded-pill mt-4" style="background: #3ec0d0 !important; border: none; width: 104px;">Next</button></center>
</div>

<script>
    function addBorder(element) {
        // Remove border from all card-text elements
        var cardTexts = document.querySelectorAll('.card-text');
        cardTexts.forEach(function(cardText) {
            cardText.classList.remove('active');
        });

        // Add border to clicked card-text
        var cardText = element.querySelector('.card-text');
        cardText.classList.add('active');
    }

</script>

@endsection