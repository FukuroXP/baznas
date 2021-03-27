@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center" style="height: 700px">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row" style="border-radius: 10px; border: 0">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Daftar</h5>
                        <form class="form-signin" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="text" id="inputUserame" class="form-control" placeholder="Nama" name="name" required autofocus>
                                <label for="inputUserame"><i class="fal fa-user-circle"></i> Nama</label>
                            </div>

                            <div class="form-label-group">
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>
                                <label for="inputEmail"><i class="fal fa-envelope"></i> Email</label>
                            </div>

                            <hr>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                                <label for="inputPassword"><i class="fal fa-key"></i> Password</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password"  name="password_confirmation" required autocomplete="new-password">
                                <label for="inputConfirmPassword"><i class="fal fa-key"></i> Konfirmasi password</label>
                            </div>

                            <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Daftar</button>
                            <div class="row col-12 mt-4 justify-content-center">
                                <h6>Sudah punya akun ? <a href="/login">Masuk</a></h6>
                            </div>
                            <h6><a class="float-right" href="/"><i class="fal fa-times"></i> Batal</a></h6>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
