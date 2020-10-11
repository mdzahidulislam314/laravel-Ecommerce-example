
@extends('layouts.master')

@section('title', 'My Orders')

@section('css')
   <link rel="stylesheet" href="/css/my-orders.css">
@stop

@section('çontent')

        <main class="main">
            <div class="page-header text-center" style="background-image: url(&#39;/img/page-header-bg.jpg&#39;)">
               <div class="container">
                  <h1 class="page-title">My Order<span>Shop</span></h1>
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
                        <aside class="col-md-4 col-lg-3">
                           <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link" id="tab-dashboard-link" href="{{ route('users.edit') }}" role="tab" aria-controls="tab-dashboard" aria-selected="true">My Account</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link active" id="tab-orders-link" href="{{ route('orders.index') }}" role="tab" aria-controls="tab-orders" aria-selected="false">My Orders</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('logout') }}">Sign Out</a>
                              </li>
                           </ul>
                        </aside>
                        <div class="col-md-8 col-lg-9">
                           <div class="tab-content">
                              @foreach ($orders as $order)
                                <div class="order-container" style="margin-bottom: 30px">
                                    <div class="order-header">
                                        <div class="order-header-items">
                                            <div>
                                                <div class="d-inline-block uppercase font-bold"><b>Order ID:</b></div>
                                                <div class="d-inline-block">{{ $order->id }}</div>
                                            </div>
                                            <div>
                                                <div class="d-inline-block uppercase font-bold"><b>Order Placed:</b></div>
                                                <div class="d-inline-block">{{ presentDate($order->created_at) }}</div>
                                            </div>
                                            <div>
                                                <div class="d-inline-block uppercase font-bold"><b>Total:</b></div>
                                                <div class="d-inline-block">{{ presentPrice($order->billing_total) }}</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="order-header-items">
                                                <div><a href="{{ route('orders.show', $order->id) }}">Views Invoice</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
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
