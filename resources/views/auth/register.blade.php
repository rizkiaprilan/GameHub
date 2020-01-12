@extends('layouts.app')

@section('content')
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                        @csrf

                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="form" name="name" id="name" placeholder="Your Name"/>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Your Email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input class="form-control @error('pass') is-invalid @enderror" type="password" name="pass" id="pass" placeholder="Password"  required autocomplete="re_pass"/>
                            @error('pass')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input class="form-control" type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required autocomplete="re_pass"/>

                        </div>
                        <div class="form-group">
                            <input class="form-control @error('agree-term') is-invalid @enderror" type="checkbox" name="agree-term" id="agree-term"/>
                            @error('agree-term')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="Authentication/images/poster_game.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
@endsection
