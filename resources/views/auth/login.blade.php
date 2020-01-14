<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/assets/css/bootstrap2.min.css">
		<link rel="stylesheet" href="frontend/assets/css/main.css">

    <title>Login</title>
  </head>
  <body>
 <div class="kotak_login">
 <div class="image-logo">
		<img src="frontend/assets/images/home/logo.png" alt="" />
 </div>
		<form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- <div class="form-group row"> --}}
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                            	<label>Username</label>
                            {{-- <div class="col-md-6"> --}}
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                                <input type="email" id="email" name="email"  class="form_login @error('email') is-invalid @enderror"  value="{{ old('email') }}"  placeholder="Username atau email ..">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        {{-- </div> --}}

                        {{-- <div class="form-group row"> --}}
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}
                            <label>Password</label>
                            {{-- <div class="col-md-6"> --}}
                                {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                                	<input type="password" id="password" name="password" class="form_login @error('password') is-invalid @enderror" placeholder="Password ..">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        {{-- </div> --}}

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="tombol_login">
                                    {{ __('Login') }}
                                </button> --}}
                                <input type="submit" class="tombol_login" value="LOGIN">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                    <a href={{url("register")}}>Register?</a>
                                @endif
                            </div>
                        </div>
                    </form>
		
	</div>
 
    <script src="frotend/assets/slim.min.js"></script>
    <script src="frontend/assets/popper.min.js"></script>
    <script src="frontend/assets/bootstrap.min.js"></script>
    <script src="frontend/assets/bootstrap2.min.js"></script>
  </body>
</html>
 