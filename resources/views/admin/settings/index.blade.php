@extends('admin.layouts.master')

@section('settings') active @stop

@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Settings</h1>

            <div class="row">
                <div class="col-md-3 col-xl-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile Settings</h5>
                        </div>

                        <div class="list-group list-group-flush" role="tablist">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab" aria-selected="false">
                                Account
                            </a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab" aria-selected="true">
                                Password
                            </a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                                Privacy and safety
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-xl-10">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <form action="{{route('store-settings')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="name">Company</label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                                           name="name" value="{{$settings['name'] ?? ''}}"/>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                                           name="email" value="{{$settings['email'] ?? ''}}"/>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                                           name="phone" value="{{$settings['phone'] ?? ''}}"/>
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="youtube">Youtube</label>
                                                    <input type="text" class="form-control @error('youtube') is-invalid @enderror"
                                                           id="youtube" name="youtube" value="{{$settings['youtube'] ?? ''}}"/>
                                                    @error('youtube')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                                           id="facebook" name="facebook" value="{{$settings['facebook'] ?? ''}}"/>
                                                    @error('facebook')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="twitter">Twitter</label>
                                                    <input type="text" class="form-control @error('twitter') is-invalid @enderror"
                                                           id="twitter" name="twitter" value="{{$settings['twitter'] ?? ''}}"/>
                                                    @error('twitter')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="footertext">Footer Text</label>
                                                    <input type="text" class="form-control @error('footertext') is-invalid @enderror"
                                                           id="footertext" name="footertext" value="{{$settings['footertext'] ?? ''}}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUsername">Address</label>
                                                    <textarea rows="2" class="form-control @error('address') is-invalid @enderror"
                                                              id="address" name="address" >{{$settings['address'] ?? ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <img alt="Charles Hall" src="{{asset($settings['logo'] ?? '')}}"
                                                         class="rounded-circle img-responsive mt-2" width="128"
                                                         height="128" />
                                                    <div class="mt-2">
                                                        <span class="btn btn-primary"><input type="file" name="logo"></span>
                                                    </div>
                                                    <small>Company Logo Upload Here</small>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Settings</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="password" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Password</h5>

                                    <form>
                                        <div class="form-group">
                                            <label for="inputPasswordCurrent">Current password</label>
                                            <input type="password" class="form-control" id="inputPasswordCurrent" />
                                            <small><a href="#">Forgot your password?</a></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPasswordNew">New password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPasswordNew2">Verify password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew2" />
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@stop

@push('scripts')

@endpush