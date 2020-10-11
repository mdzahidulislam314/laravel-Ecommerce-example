@extends('admin.layouts.master')

@section('content')

<main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <h3 class="col-md-0">Create Students</h3>
                    <a href="{{ route('student.index') }}" class="btn btn-primary">All Student</a>
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
                    <form action="{{ route('student.store') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Student Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@stop