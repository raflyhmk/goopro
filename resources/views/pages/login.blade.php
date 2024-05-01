@extends('layout.user')
@section('content')

<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-sm-12 col-lg-6 d-flex flex-column align-items-lg-start align-items-sm-center">
            <img src="{{url('aset/user/image/logo.png')}}" alt="logo-image" style="width: 312px;">
            <form class="row g-3">
                <div class="col-12">
                    <label for="newpassword" class="form-label fw-bold d-flex justify-content-start mt-3">Your Email Address</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" placeholder="new password" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-12">
                    <label for="newpassword" class="form-label fw-bold d-flex justify-content-start mt-3">password</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" placeholder="confirm new password" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary btn-forgot-password">Log in</button>
                    <p class="mt-3 fw-bold"><a href="/forgotpassword" class="text-black text-decoration-none">Forgot your password?</a></p>
                </div>
            </form>
        </div>
        <div class="col-lg-6 d-none d-lg-block" style="background: #3EC0D0;">
            <center><h1 class="text-black mt-5">Welcome <span class="text-white">Back!!!</span></h1></center>
            <img src="{{url('aset/user/image/register.png')}}" alt="register-image" class="img-fluid">
        </div>
    </div>
</div>

    <!-- footer -->
    <div class="container-fluid">
    @include('parts.user.footer')
    </div>
    <!-- end footer -->



@endsection