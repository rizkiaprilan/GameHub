@extends('layouts.app')

@section('content')
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="Authentication/images/poster_game2.png" alt="sing up image"></figure>
                    <a href="{{route('register')}}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign In</h2>
                    <form method="POST" class="register-form" id="login-form" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input  class="form-control @error('email') is-invalid @enderror" type="type" name="email" id="email" placeholder="email"/>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input  class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password"/>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>


                        <div class="form-group">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="form-group form-button">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                {{--                                @if (Route::has('password.request'))--}}
                                {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                {{--                                        {{ __('Forgot Your Password?') }}--}}
                                {{--                                    </a>--}}
                                {{--                                @endif--}}
                            </div>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
