@extends('layout.pembeli')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex flex-column">
            <h4 class="text-capitalize ml-3 text-dark font-weight-bold">Detail aset</h4>
        </div>
    </div>
    
    <!-- aset item -->
    <div class="row">
        <div class="col-lg-7">
            <img src="https://s3-alpha-sig.figma.com/img/d0d0/4898/e6fb7614bb708fc1c02a20caf25295a9?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=PUm4O4W8SAQRDhJWdMtTsbsyt5Qq7mFRgHgq0OTXA2vqYdsePmtgxRYWFQuuj~PzjJVzuy3sB2Witj3gdbEUn410CjMs6QysK2lD8JYvWRO7JNKK08dW31G-FEkWZKjlJzFeF16LjVEtuODrLr8Pq3YogxkNPI77I-n8IlwvzoGlCX5S9ScyR5SVZmvmeCkbF6igM9cNHJrdPiC~vegChqx567T6Vgs-2-ZyYLQjMR4VhV2YUg9kfqbVMyS38c12t~j5oBXWIrm~ACH7yAvKkLU1zr-q9JV41SQxgoXPqCTrogN5rNYccGYbQomKvZ6u3AQmdGoxVMjEQta44pFalQ__" alt="detail-image" class="img-fluid">
       </div>
       <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <center><button type="button" class="btn btn-info btn-lg">For sale</button></center>
                    <p class="card-text mt-3 text-center h2 text-dark border-bottom border-dark pb-3">Rumah No 2 di Bandung, Jawa Barat</p>
                </div>
                <center><img src="https://s3-alpha-sig.figma.com/img/5b9c/6a32/b98328666f8f06a693c5f1ee9a83890e?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=G3HBZNZ5fBZF9LcHE9fchXJEI3yQotF3XkSzHdjZx5ea8-hYov4FDtwFMpSAxTjWKtp4Q86T5isjHRA4IZ7xYE5t0R6lnjY5cz3jgfirG0PqpUTvBCINs2pvDfKUApbmCmGuezWEa6USLevAnfib6KhB3fbVuKy6a5kYi0Db6Dhia2h-5HsbpJNOqLyd5XUU-6HMDCPBoWj6ECimKvll8rWW4ZuOvVGH8cb5JV0ezkQH7rJYV7JrYWOe1tXNzZYMlnx1twtgN-f0zdsUWkmmSQ70ZwoGYB1JSVmJtm8df-dye4pTkQau-vLbcgmWaPxo1dKV1dtWZHFOYznrZLFaQQ__" class="card-img-top" alt="detail-image" style="width: 300px;"></center>
            </div>
       </div>
       
    </div> 
</div>
@endsection