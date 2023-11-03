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
                    <h2>Register</h2>
                    <p>Silahkan daftar akun anda</p>
            </div>
            <form action="" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                           name="name" placeholder="Masukan Nama" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                           name="email" placeholder="Masukan Email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation"
                           placeholder="Konfirmasi Password" required>
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck" required>
                        <label for="formCheck" class="form-check-label text-secondary"><small>Saya menyetujui ketentuan dan kebijakan yang berlaku</small></label>
                    </div>
                </div>

                <div class="input-group mb-2">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Register</button>
                </div>
                <div class="row">
                    <small>Sudah Punya Akun? <a href="/admin">Login</a></small>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
