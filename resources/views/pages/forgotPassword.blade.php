@extends('layout.user')
@section('content')


<center>
<div class="container">
        <img src="{{url('aset/user/image/logo.png')}}" alt="logo-image" class="img-fluid mt-5">
        <h1 class="mb-4">Reset your password</h1>
        <div class="col-6">
            <form class="row g-3">
                <div class="col-12">
                    <label for="newpassword" class="form-label fw-bold d-flex justify-content-start mt-3">New password</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" placeholder="new password" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-12">
                    <label for="newpassword" class="form-label fw-bold d-flex justify-content-start mt-3">Confirm New password</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" placeholder="confirm new password" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary btn-forgot-password" onclick="event.preventDefault(); location.href='{{ url('successpassword') }}'">reset password</button>
                </div>
            </form>
        </div>
</div>
</center>


@endsection