@extends('admin.layouts.master')

@section('content')

<main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3>Edit Category - {{ $category->name }}</h3>
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
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label>Category Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                        </div>
                        <button type="submit" class="btn btn-success">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@stop