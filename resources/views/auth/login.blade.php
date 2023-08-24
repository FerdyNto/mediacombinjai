@extends('auth.authTemplate')
@section('auth')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center flex-md-column mx-auto"
            style="height: 100vh; width:500px">
            <img src="{{ asset('/') . 'img/img logo/LOGO MEDIACOM.png' }}" alt="Logo Media Com" width="250px" class="mb-5">
            <form action="" class="col-12 border border-secondary-subtle bg-white p-3">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>

                <div class="mb-3 d-grid">
                    <button class="btn btn-primary" type="submit">Masuk</button>
                </div>
            </form>
        </div>
    </div>
@endsection
