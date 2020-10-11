@extends('layouts.master')

@section('title', 'Sign Up')

@section('css')

   <link rel="stylesheet" href="/css/sign-up.css">

@stop

@section('çontent')

        <main class="main">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#" role="tab"
                                    aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="register" role="tabpanel"
                                    aria-labelledby="register-tab">
                                    @if (session()->has('success_message'))
                                    <div class="alert alert-success">
                                       {{ session()->get('success_message') }}
                                    </div>
                                    @endif @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                       <ul>
                                          @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                          @endforeach
                                       </ul>
                                    </div>
                                    @endif
                                    <form method="POST" action="{{ route('register') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="register-name">Your Name</label>
                                            <input id="name" type="text" class="form-control" name="name"
                                                value="{{ old('name') }}" placeholder="Name" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input id="email" type="email" class="form-control" name="email"
                                                value="{{ old('email') }}" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input id="password" type="password" class="form-control" name="password"
                                                placeholder="Password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm-password">Confirm Password *</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" placeholder="Confirm Password" required>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            {{--<div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required="">
                                            <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div>--}}
                                        </div>
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">Already have an account?</p>
                                        <div class="row">
                                            <div class="col-sm-12" style="text-align: center;">
                                                <a href="{{ route('login') }}" class="btn btn-outline-primary-2">
                                                    Login
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

@stop







{{--@extends('layout')

@section('title', 'Sign Up for an Account')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div>
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2>Create Account</h2>
            <div class="spacer"></div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                <input id="password" type="password" class="form-control" name="password" placeholder="Password" placeholder="Password" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                    required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Create Account</button>
                    <div class="already-have-container">
                        <p><strong>Already have an account?</strong></p>
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="auth-right">
            <h2>New Customer</h2>
            <div class="spacer"></div>
            <p><strong>Save time now.</strong></p>
            <p>Creating an account will allow you to checkout faster in the future, have easy access to order history and customize your experience to suit your preferences.</p>

            &nbsp;
            <div class="spacer"></div>
            <p><strong>Loyalty Program</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.</p>
        </div>
    </div> <!-- end auth-pages -->
</div>
@endsection--}}
