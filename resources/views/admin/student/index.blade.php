@extends('admin.layouts.master')

@section('content')

<main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <h3 class="col-md-0">All Students</h3>
                    <a href="{{route('student.create')}}" class="btn btn-primary">Create Student</a>
                </div>
            
            </div>
            
        <div class="cotainer-fluid">
            <div class="row">
                <div class="col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($students->count() > 0)
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        <a href="{{ route('student.edit', ['id' => $student->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('student.destroy', ['id' => $student->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4"><h5 class="text-center">No Post Found</h5></td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@stop