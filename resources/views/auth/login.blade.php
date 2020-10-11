@extends('layouts.master')

@section('title', 'Login')

@section('css')

@stop

@section('main')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div>
            <!-- End .container -->
        </nav>
        <!-- End .breadcrumb-nav -->

        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('/admin/assets/images/backgrounds/login-bg.jpg');">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email address *</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{ old('email') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               value="{{ old('password') }}" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>

                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div>
                                        <!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div>
                                        <!-- End .col-6 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .form-choice -->
                            </div>
                            <!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                                <form  method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Your full name *</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{ old('name') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Your email address *</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{ old('email') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password *</label>
                                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div>
                                        <!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div>
                                        <!-- End .col-6 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .form-choice -->
                            </div>
                            <!-- .End .tab-pane -->
                        </div>
                        <!-- End .tab-content -->
                    </div>
                    <!-- End .form-tab -->
                </div>
                <!-- End .form-box -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .login-page section-bg -->
    </main>

@stop

@section('js')

@stop
