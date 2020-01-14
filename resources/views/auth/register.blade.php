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

    <title>Register</title>
  </head>
  <body>
 <div class="kotak_login">
 <div class="image-logo">
		<img src="frontend/assets/images/home/logo.png" alt="" />
 </div>
		 <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}
                            <label>Name</label>
                            {{-- <div class="col-md-6"> --}}
                                <input id="name" type="text" class="form_login @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name....">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div>
                        </div> --}}

                        {{-- <div class="form-group row"> --}}
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                            <label>E-mail Address</label>
                            {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email" class="form_login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail ....">

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
                                <input id="password" type="password" class="form_login @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password....">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        {{-- </div> --}}

                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}
                            <label>Comfirm password</label>
                            {{-- <div class="col-md-6"> --}}
                                <input id="password-confirm" type="password" class="form_login" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm Password...">
                            {{-- </div>
                        </div> --}}
                        	<input type="submit" class="tombol_login" value="REGISTER">
                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> --}}
                    </form>
	</div>
 
    <script src="frotend/assets/slim.min.js"></script>
    <script src="frontend/assets/popper.min.js"></script>
    <script src="frontend/assets/bootstrap.min.js"></script>
    <script src="frontend/assets/bootstrap2.min.js"></script>
  </body>
</html>
 