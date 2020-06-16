@extends('layouts.frontend.login')

@section('content')


    <div class="login-box">

        <div class="login-logo">
            <img src="{{ asset('/images/logo-login.png') }}" style="height: 100px">
            <br>
            <a href="#">NAMA APLIKASI</a>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card">
                <div class="card-body login-card-body">

                    <p class="login-box-msg">Masukan Nama Pengguna dan Kata Sandi</p>

                        <div class="form-group field-loginform-username required has-error">

                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username" autofocus>

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group field-loginform-password required">

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <div style="padding-top:8px">
                                        <label for="remember">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-flat btn-block"><i class="fa fa-lock"></i> Login</button>
                                </div>
                            </div><!-- .row -->
                            <?php /*
                            <div class="row">
                                <div class="col-12">
                                    @if (Route::has('password.request'))
                                        <div style="padding-top: 10px">
                                            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            */ ?>
                        </div>

                </div>
            </div><!-- .card -->
        </form>

    </div>

@endsection
