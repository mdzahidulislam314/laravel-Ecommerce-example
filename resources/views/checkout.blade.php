@extends('layouts.master')

@section('title', 'Checkout')

@section('css')

@stop

@section('main')
        
    <main class="main">
        <div class="page-header text-center" style="background-image: url(&#39;/img/shop/page-header-bg.jpg&#39;)">
            <div class="container">
                <h1 class="page-title">Checkout<span>Shop</span></h1>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('landing-page') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
        </nav>
        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger mb-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Billing Details</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Your Full Name *</label>
                                    @if (auth()->user())
                                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required>
                                    @else
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                    @endif
                                </div>
                                <div class="col-sm-12">
                                    <label>Your Email Address*</label>
                                    @if (auth()->user())
                                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" required>
                                    @else
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                    @endif
                                </div>
                                <div class="col-sm-12">
                                    <label>Your Mobile Number*</label>

                                    @if (auth()->user())
                                        <input type="text" class="form-control" id="number" name="number" value="{{ auth()->user()->number }}" required>
                                    @else
                                        <input type="text" class="form-control" id="number" name="number" value="{{ old('number') }}" required>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                <label>Shipping Address *</label>
                                    <textarea name="shipping_address" class="form-control" rows="10"></textarea>
                                </div>
                                <div class="col-sm-6">
                                <label>Billing Address</label>
                                    <textarea name="billing_address" class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3>
                                <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <td><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></td>
                                        <td>{{ presentPrice($item->subtotal) }}</td>
                                    </tr>
                                @endforeach
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>{{ presentPrice(Cart::subtotal()) }}</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>{{ presentPrice($newTotal) }}</td>
                                    </tr>
                                </tbody>
                                </table>
                                <div class="accordion-summary" id="accordion-payment">
                                <div class="card">
                                    <div class="card-header" id="heading-1">
                                        <h2 class="card-title">
                                            <a role="button" data-toggle="collapse" href="#" aria-expanded="true" aria-controls="collapse-1">
                                            Cash on delivery
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                        <div class="card-body">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-summary" id="accordion-payment">
                                    <div class="card">
                                        <div class="card-header" id="heading-2">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                    Bkash payment
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment" style="">
                                            <div class="card-body">
                                                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-3">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                    Cash on delivery
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment" style="">
                                            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-4">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                    Rocket Payment
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment" style="">
                                            <div class="card-body">
                                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-5">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                    Nogot Payment
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->
                                </div>
                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span type="submit" id="complete-order" class="btn-text">Place Order</span>
                                    <span class="btn-hover-text">Proceed to Checkout</span>
                                </button>
                            </div>
                        </aside>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@stop

@section('js')

@stop
