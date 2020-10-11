@extends('admin.layouts.master')

@section('content')

<main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 col-md-6">
                <div class="col-auto d-none d-sm-block">
                    <h2>Add Categories</h2>
                    <a href="{{route('categories.index')}}" class="btn btn-primary">All Category</a>
                </div>
            
            </div>
            
        <div class="cotainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            </ul>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('categories.store') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Category Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@stop
