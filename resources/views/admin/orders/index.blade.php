@extends('admin.layouts.master')
@section('orders') active @endsection
@section('content')

<main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h2>All Orders</h2>
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
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Placed At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($orders->count() > 0)
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->customer->name }}</td>
                                            <td>{!! $order->statusHtml()!!}</td>
                                            <td>{{ presentPrice($order->billing_total) }}</td>
                                            <td>{{ presentDate($order->created_at) }}</td>
                                            <td>
                                                <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary">View Details</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4"><h4 class="text-center">No Category Found !</h4></td>
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