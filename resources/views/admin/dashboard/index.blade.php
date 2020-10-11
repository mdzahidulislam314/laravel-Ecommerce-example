@extends('admin.layouts.master')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Analytics</strong> Dashboard</h3>
                </div>
                <div class="col-auto ml-auto text-right mt-n1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                            <li class="breadcrumb-item"><a href="#">AdminKit</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Sales</h5>
                                        <h1 class="display-5 mt-1 mb-3">2.382</h1>
                                        <div class="mb-1">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Sales</h5>
                                        <h1 class="display-5 mt-1 mb-3">2.382</h1>
                                        <div class="mb-1">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Sales</h5>
                                        <h1 class="display-5 mt-1 mb-3">2.382</h1>
                                        <div class="mb-1">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Sales</h5>
                                        <h1 class="display-5 mt-1 mb-3">2.382</h1>
                                        <div class="mb-1">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cotainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-shopping-cart"></i>
                                Today's Orders
                                {{--                        <span class="badge bg-light-blue">{{  $counts['today'] }}</span>--}}
                            </h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered" id="data_table">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Restaurant</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
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

        $( document ).ready(function() {

            /*var data_table = jQuery('#data_table').DataTable(
                {
                    "processing":true,
                    "bLengthChange": false,
                    "pageLength": 50,
                    "ordering": false,
                    "ajax": {
                        "url": '{{ url('admin/dashboard/orders-today') }}'
                },
                "serverSide":true,
                "bFilter":false,
                "columns":
                    [
                        {"data":"title","name":"title","defaultContent":""},
                        {"data":"restaurant_id.name","name":"restaurant_id.name","defaultContent":""},
                        {"data":"date","name":"date","defaultContent":""},
                        {"data":"total","name":"total","defaultContent":""},
                        {"data":"status","name":"status","defaultContent":""},
                        {"data":"action","name":"action","orderable":false,"searchable":false,"className":"datatable-action"}
                    ]
            }
        );*/


        });

    </script>
@endpush

