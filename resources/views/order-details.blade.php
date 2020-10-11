
@extends('layouts.master')

@section('title', 'My Orders')

@section('css')
    <link rel="stylesheet" href="/css/my-orders.css">
    <style>
        .order-information .order-information-list label {
            font-weight: 500;
            min-width: 165px;
            margin-bottom: 0;
            padding-right: 10px;
        }
    </style>
@stop

@section('çontent')

    <main class="main">
        <div class="page-header text-center" style="background-image: url(&#39;/img/page-header-bg.jpg&#39;)">
            <div class="container">
                <h1 class="page-title"><a href="{{url('/my-orders')}}" style="color: #0a0c0d">My Order</a><span>Shop</span></h1>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('landing-page') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
                                            <div class="text-muted">Order Information:</div>
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
                                            <div class="text-muted">Billing Address:</div>
                                            <strong>
                                                {{$order->billing_address}}
                                            </strong>
                                            <p>
                                                {{$order->billing_city}} <br> {{$order->billing_province}} <br> {{$order->billing_postalcode}} <br>
                                                <a href="#">
                                                    {{$order->billing_email}}
                                                </a>
                                            </p>
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

@section('js')

    <script src="/js/my-orders.js"></script>

@stop


{{--@extends('layout')

@section('title', 'My Orders')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>My Orders</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="products-section my-orders container">
        <div class="sidebar">

            <ul>
              <li><a href="{{ route('users.edit') }}">My Profile</a></li>
              <li class="active"><a href="{{ route('orders.index') }}">My Orders</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="my-profile">
            <div class="products-header">
                <h1 class="stylish-heading">My Orders</h1>
            </div>

            <div>
                @foreach ($orders as $order)
                <div class="order-container">
                    <div class="order-header">
                        <div class="order-header-items">
                            <div>
                                <div class="uppercase font-bold">Order Placed</div>
                                <div>{{ presentDate($order->created_at) }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">Order ID</div>
                                <div>{{ $order->id }}</div>
                            </div><div>
                                <div class="uppercase font-bold">Total</div>
                                <div>{{ presentPrice($order->billing_total) }}</div>
                            </div>
                        </div>
                        <div>
                            <div class="order-header-items">
                                <div><a href="{{ route('orders.show', $order->id) }}">Order Details</a></div>
                                <div>|</div>
                                <div><a href="#">Invoice</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="order-products">
                        @foreach ($order->products as $product)
                            <div class="order-product-item">
                                <div><img src="{{ asset($product->image) }}" alt="Product Image"></div>
                                <div>
                                    <div>
                                        <a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a>
                                    </div>
                                    <div>{{ presentPrice($product->price) }}</div>
                                    <div>Quantity: {{ $product->pivot->quantity }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div> <!-- end order-container -->
                @endforeach
            </div>

            <div class="spacer"></div>
        </div>
    </div>

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection--}}
