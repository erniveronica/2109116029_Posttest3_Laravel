@extends('/layouts.log')
@section('base')

<div class="container d-flex justify-content-center align-items-center min-vh-100">
<div class="row border rounded-5 p-3 bg-white shadow box-area">
<div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: bisque;">
    <div class="featured-image mb-3">
    <img src="/assets/logo.png" class="img-fluid" style="width: 200px;">
    </div>
</div>
<div class="col-md-6 right-box">
    <div class="row align-items-center p-3 text-center">
        <div class="header-text mb-4">
                <h2>Login Es Teh Solo</h2>
                <p>Silahkan login terlebih dahulu</p>
        </div>
        <form class="auth-form login-form" action="{{ route('login') }}" method="post">
            @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg bg-light fs-6" id="email"
            name="email" placeholder="Email" value="{{ old('email') }}" required>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control form-control-lg bg-light fs-6" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-group mb-3 d-flex justify-content-between">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formCheck">
                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
            </div>
        </div>
        <div class="input-group mb-2">
            <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
        </div>
        <div class="row">
            <small>Belum Punya Akun? <a href="/register">Register</a></small>
        </div>
    </div>
</div>
</div>
</div>
