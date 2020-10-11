@extends('layouts.master')

@section('title', 'My Orders')

@section('css')

    <style>
        .order-information .order-information-list label {
            font-weight: 500;
            min-width: 165px;
            margin-bottom: 0;
            padding-right: 10px;
        }
    </style>
@stop

@section('main')

    <main class="main">
        <div class="page-header text-center" style="background-image: url(&#39;/img/page-header-bg.jpg&#39;)">
            <div class="container">
                <h1 class="page-title"><a href="{{url('/my-orders')}}" style="color: #0a0c0d">Order Details</a><span>Shop</span></h1>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('landing-page') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('users.edit') }}">My Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orders Details</li>
                </ol>
            </div>
        </nav>
        <div class="page-content">
            <div class="dashboard">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="border-top: none;border-bottom: none">
                                <div class="card-body m-sm-3 m-md-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-muted d-inline-block">Order NO:</div>
                                            <strong>{{ $order->id }}</strong>
                                            <div class="text-muted">Order Status:</div>
                                            <strong></strong>
                                        </div>
                                        <div class="col-md-6 text-md-right">

                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="text-muted">Customer Information:</div>
                                            <div class="order-information">
                                                <ul class="list-inline order-information-list">
                                                    <li><label>Name:</label> <span>{{$order->billing_name}}</span></li>
                                                    <li><label>Phone:</label> <span>{{$order->billing_phone}}</span></li>
                                                    <li><label>Email:</label> <span>{{$order->billing_email}}</span></li>
                                                    <li><label>Date:</label> <span>{{ presentDate($order->created_at) }}</span></li>
                                                    <li><label>Payment Method:</label> <span>{{$order->payment_gateway}}</span></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <div class="text-muted">Shipping Address:</div>
                                            <strong>
                                                {{$order->shipping_address}}
                                            </strong>
                                        </div>
                                    </div>

                                    <table class="table table-sm">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th class="text-right">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($order->products as $product)
                                            <tr>
                                                <td width="20%"><img src="{{url($product->image)}}" alt="" width="50"></td>
                                                <td width="30%"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></td>
                                                <td width="25%">{{ $product->pivot->quantity }}</td>
                                                <td width="25%" class="text-right">{{presentPrice($product->pivot->quantity*$product->price)}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Subtotal </th>
                                            <th class="text-right">{{presentPrice($order->billing_subtotal)}}</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Shipping </th>
                                            <th class="text-right">{{presentPrice($order->shipped)}}</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Discount </th>
                                            <th class="text-right">% {{$order->billing_discount}}</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Tax </th>
                                            <th class="text-right">{{presentPrice($order->billing_tax)}}</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Total </th>
                                            <th class="text-right">{{presentPrice($order->billing_total)}}</th>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary">
                                            Print this receipt
                                        </a>
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
