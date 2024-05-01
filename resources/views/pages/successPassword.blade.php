@extends('layout.user')
@section('content')


<center>
<div class="container">
        <img src="{{url('aset/user/image/logo.png')}}" alt="logo-image" class="img-fluid mt-5">
        <h1 class="mb-4">Successfull Password reset!!</h1>
        <div class="col-6">
            <p class="fs-3 fw-light">You can now use your new password to Login to your account👋</p>
            <button type="submit" class="btn btn-primary btn-forgot-password" onclick="event.preventDefault(); location.href='{{ url('login') }}'">Log in</button>
        </div>
</div>
</center>


@endsection