<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('depan/img/logo-up.png') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('belakang/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset("belakang/assets/css/fonts.min.css") }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('belakang/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('belakang/assets/css/atlantis.css') }}">
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Sign In To Admin</h3>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="text" value="{{ old('email') }}"
                            class="form-control input-border-bottom @error('email') is-invalid @enderror"
                            placeholder="Your Email" required>
                        <label for="email" class="placeholder">Email</label>
                        @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" placeholder="Your Password"
                            required>
                        <label for="password" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                        @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>    
                    @enderror

                    </div>
                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
                    </div>
                    <div class="login-account">
                        <span class="msg">Lost your password ?</span>
                        <br>
                        <a href="#" class="link">Reset</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('belakang/assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('belakang/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('belakang/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('belakang/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('belakang/assets/js/atlantis.min.js') }}"></script>
</body>

</html>