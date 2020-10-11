@extends('admin.layouts.master')
@section('products-menu') active @stop
@section('show') show @stop
@section('add-brand') active @stop
@section('content')

<main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 col-md-6">
                <div class="col-auto d-flex align-items-center">
                    <h2>Add Categories</h2>
                    <a href="{{route('brands.index')}}" class="btn btn-primary">All Brands</a>
                </div>
            
            </div>
            
        <div class="cotainer-fluid">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                    </ul>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <form action="{{ route('brands.store') }}" method="POST">
                                        {{ csrf_field() }}
                                    <div class="form-wrapper mt-5 mb-5">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Brand Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
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
