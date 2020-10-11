<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{config('app.name')}} | Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/admin/login/vendor/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/admin/login/vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/admin/login/vendor/css-hamburgers/hamburgers.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/admin/login/vendor/select2/select2.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/admin/login/css/util.css" />
    <link rel="stylesheet" type="text/css" href="/admin/login/css/main.css" />
    <!--===============================================================================================-->
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
            <form class="login100-form validate-form" action="{{route('admin.login.post')}}" method="POST">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        {{$errors->first()}}
                    </div>
                @endif
                <span class="login100-form-title p-b-55">
                    Login
                </span>

                @if(Session::has('error'))
                    <p class="alert alert-danger text-center" style="width: 100%">{{ Session::get('error') }}</p>
                @endif

                <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" />

                    <span class="focus-input100"></span>
                    <span class="symbol-input100"><span class="lnr lnr-envelope"></span></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                                <span class="lnr lnr-lock"></span>
                            </span>
                </div>

                <div class="contact100-form-checkbox m-l-4">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn p-t-25">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="/admin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/admin/login/vendor/bootstrap/js/popper.js"></script>
<script src="/admin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/admin/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/admin/login/js/main.js"></script>
</body>
</html>
