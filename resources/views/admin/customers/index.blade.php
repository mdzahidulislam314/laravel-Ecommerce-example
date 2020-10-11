@extends('admin.layouts.master')
@section('cus') active @endsection
@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h2>{{$title}}</h2>
                    {{--<a href="{{route('categories.create')}}" class="btn btn-primary">Add Category</a>--}}
                </div>

            </div>

            <div class="cotainer-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @if(Session::has('success'))
                                    <div class="alert alert-success p-10">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($customers->count() > 0)
                                        @foreach($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->id }}</td>
                                                <td>{{ ($customer->name) }}</td>
                                                <td>{{ ($customer->email) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.orders.show', $customer->id) }}" class="btn btn-primary">View Details</a>
                                                    {{--<button class="btn btn-danger" type="button" onclick="deleteTable({{$category->id}})">
                                                        Delete
                                                    </button>

                                                    <form id="delete-form-{{$category->id}}"
                                                            action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4"><h4 class="text-center">No Customer Found !</h4></td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </main>

@stop

@push('scripts')
    <script>
        function deleteTable(id) {
            if(confirm("Do you want to delete this item?")) {
                document.getElementById('delete-form-'+id).submit();
                toastr.success('Deleted!', "")
            }
        }
    </script>
@endpush